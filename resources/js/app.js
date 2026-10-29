import "./bootstrap";
import "../css/app.css";
import { animate, stagger } from "animejs";
import { initWelcome } from "./welcome";

document.addEventListener("DOMContentLoaded", () => {
    initWelcome();
    const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;
    document.documentElement.classList.add("js-motion");

    // Navigation and mobile accessibility
    const navbar = document.getElementById("navbar");
    const menuToggle = document.getElementById("menuToggle");
    const navbarMenu = document.getElementById("navbarMenu");
    const navLinks = [...document.querySelectorAll(".nav-link")];
    const closeMenu = () => {
        menuToggle?.classList.remove("active");
        navbarMenu?.classList.remove("active");
        menuToggle?.setAttribute("aria-expanded", "false");
        document.body.style.overflow = "";
    };
    menuToggle?.setAttribute("aria-expanded", "false");
    menuToggle?.addEventListener("click", () => {
        const isOpen = !navbarMenu?.classList.contains("active");
        menuToggle.classList.toggle("active", isOpen);
        navbarMenu?.classList.toggle("active", isOpen);
        menuToggle.setAttribute("aria-expanded", String(isOpen));
        document.body.style.overflow = isOpen ? "hidden" : "";
    });
    navLinks.forEach((link) => link.addEventListener("click", closeMenu));
    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") closeMenu();
    });
    window.addEventListener("resize", () => {
        if (window.innerWidth > 768) closeMenu();
    });

    // Lightweight, one-time Anime.js entrance effects; no infinite animations
    if (!reduceMotion) {
        const heroElements = [
            ...document.querySelectorAll(
                ".hero-content .reveal, .hero-visual.reveal",
            ),
        ];
        if (heroElements.length) {
            animate(heroElements, {
                opacity: [0, 1],
                translateY: [22, 0],
                duration: 740,
                delay: stagger(95, { start: 110 }),
                ease: "outCubic",
            });
        }
        const scrollItems = document.querySelectorAll(".scroll-reveal");
        if ("IntersectionObserver" in window) {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) return;
                        observer.unobserve(entry.target);
                        animate(entry.target, {
                            opacity: [0, 1],
                            translateY: [18, 0],
                            duration: 620,
                            ease: "outCubic",
                        });
                    });
                },
                { threshold: 0.08, rootMargin: "0px 0px -30px 0px" },
            );
            scrollItems.forEach((el) => observer.observe(el));
        }
    }

    // Counter: single animation only when visible
    const counters = document.querySelectorAll(".stat-number[data-target]");
    if ("IntersectionObserver" in window && !reduceMotion) {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const target = Number(el.dataset.target) || 0;
                    const start = performance.now();
                    const frame = (now) => {
                        const p = Math.min((now - start) / 1100, 1);
                        el.textContent = String(
                            Math.round(target * (1 - (1 - p) ** 3)),
                        );
                        if (p < 1) requestAnimationFrame(frame);
                    };
                    requestAnimationFrame(frame);
                    counterObserver.unobserve(el);
                });
            },
            { threshold: 0.5 },
        );
        counters.forEach((el) => counterObserver.observe(el));
    } else {
        counters.forEach((el) => {
            el.textContent = el.dataset.target || "0";
        });
    }

    // Typing is intentionally removed: steady title is easier to read for all ages.
    const typing = document.getElementById("typingText");
    if (typing) typing.textContent = "Fullstack Web Developer";
    document.querySelector(".typing-cursor")?.remove();

    // One passive scroll handler for nav + progress
    const progress = document.getElementById("scrollProgress");
    const sections = [...document.querySelectorAll("section[id]")];
    let scheduled = false;
    const updateScroll = () => {
        navbar?.classList.toggle("scrolled", window.scrollY > 30);
        const height =
            document.documentElement.scrollHeight - window.innerHeight;
        if (progress)
            progress.style.width = `${height > 0 ? (window.scrollY / height) * 100 : 0}%`;
        let current = "home";
        sections.forEach((section) => {
            if (window.scrollY >= section.offsetTop - 220) current = section.id;
        });
        navLinks.forEach((link) =>
            link.classList.toggle(
                "active",
                link.getAttribute("href") === `#${current}`,
            ),
        );
        scheduled = false;
    };
    window.addEventListener(
        "scroll",
        () => {
            if (!scheduled) {
                scheduled = true;
                requestAnimationFrame(updateScroll);
            }
        },
        { passive: true },
    );
    updateScroll();
});

const cvDropdown = document.querySelector(".cv-dropdown");
const cvToggle = cvDropdown?.querySelector(".cv-dropdown-toggle");

const closeCvDropdown = () => {
    cvDropdown?.classList.remove("open");
    cvToggle?.setAttribute("aria-expanded", "false");
};

cvToggle?.addEventListener("click", () => {
    const isOpen = cvDropdown.classList.toggle("open");
    cvToggle.setAttribute("aria-expanded", String(isOpen));
});

document.addEventListener("click", (event) => {
    if (cvDropdown && !cvDropdown.contains(event.target)) {
        closeCvDropdown();
    }
});

document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        closeCvDropdown();
    }
});
