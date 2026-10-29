import * as THREE from "three";
import { animate, stagger } from "animejs";

export function initWelcome() {
    const overlay = document.getElementById("welcomeIntro");
    const canvas = document.getElementById("welcomeCanvas");
    const skip = document.getElementById("skipIntro");

    if (!overlay || !canvas) return;

    const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    if (reduceMotion || sessionStorage.getItem("welcomeSeen")) {
        overlay.remove();
        return;
    }

    let finished = false;
    let rafId = null;
    let renderer = null;
    let geometry = null;
    let material = null;
    let timer = null;

    const finish = () => {
        if (finished) return;
        finished = true;

        sessionStorage.setItem("welcomeSeen", "1");
        clearTimeout(timer);
        if (rafId !== null) cancelAnimationFrame(rafId);

        animate(overlay, {
            opacity: [1, 0],
            duration: 550,
            ease: "inOutCubic",
            onComplete: () => {
                renderer?.dispose();
                geometry?.dispose();
                material?.dispose();
                overlay.remove();
            },
        });
    };

    skip?.addEventListener("click", finish);

    const onKeyDown = (event) => {
        if (event.key === "Escape") finish();
    };

    document.addEventListener("keydown", onKeyDown, { once: true });

    // THREE.JS SCENE
    try {
        const scene = new THREE.Scene();

        const camera = new THREE.PerspectiveCamera(
            45,
            window.innerWidth / window.innerHeight,
            0.1,
            100,
        );

        camera.position.z = 7;

        renderer = new THREE.WebGLRenderer({
            canvas,
            alpha: true,
            antialias: true,
        });

        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.5));
        renderer.setSize(window.innerWidth, window.innerHeight);

        geometry = new THREE.TorusKnotGeometry(1.35, 0.25, 120, 12, 2, 3);

        material = new THREE.MeshPhysicalMaterial({
            color: 0x79aa96,
            metalness: 0.12,
            roughness: 0.25,
            transparent: true,
            opacity: 0.5,
            clearcoat: 0.8,
        });

        const object = new THREE.Mesh(geometry, material);
        object.position.x = 2;
        scene.add(object);

        scene.add(new THREE.AmbientLight(0xffffff, 2));

        const light = new THREE.DirectionalLight(0xffffff, 3);
        light.position.set(3, 4, 5);
        scene.add(light);

        const clock = new THREE.Clock();

        const render = () => {
            if (finished) return;

            const delta = clock.getDelta();
            object.rotation.x += delta * 0.13;
            object.rotation.y += delta * 0.23;

            renderer.render(scene, camera);
            rafId = requestAnimationFrame(render);
        };

        render();
    } catch (error) {
        console.warn("3D intro unavailable:", error);
    }

    // ANIME.JS ENTRANCE
    animate(".welcome-content > *", {
        opacity: [0, 1],
        translateY: [25, 0],
        delay: stagger(160, { start: 100 }),
        duration: 700,
        ease: "outCubic",
    });

    animate(".welcome-line", {
        scaleX: [0, 1],
        duration: 800,
        delay: 450,
        ease: "outCubic",
    });

    timer = setTimeout(finish, 5000);
}
