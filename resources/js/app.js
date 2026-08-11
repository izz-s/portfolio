import './bootstrap';
import '../css/app.css';

document.addEventListener('DOMContentLoaded', () => {

    /*
    |--------------------------------------------------------------------------
    | Navbar scroll
    |--------------------------------------------------------------------------
    */

    const navbar = document.getElementById('navbar');

    const handleNavbar = () => {
        if (window.scrollY > 30) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    };

    handleNavbar();

    window.addEventListener('scroll', handleNavbar);


    /*
    |--------------------------------------------------------------------------
    | Mobile menu
    |--------------------------------------------------------------------------
    */

    const menuToggle = document.getElementById('menuToggle');
    const navbarMenu = document.getElementById('navbarMenu');

    menuToggle?.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        navbarMenu?.classList.toggle('active');

        document.body.style.overflow =
            navbarMenu?.classList.contains('active')
                ? 'hidden'
                : '';
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            menuToggle?.classList.remove('active');
            navbarMenu?.classList.remove('active');

            document.body.style.overflow = '';
        });
    });


    /*
    |--------------------------------------------------------------------------
    | Cursor glow
    |--------------------------------------------------------------------------
    */

    const cursorGlow = document.getElementById('cursorGlow');

    if (cursorGlow) {

        let mouseX = 0;
        let mouseY = 0;

        let currentX = 0;
        let currentY = 0;

        document.addEventListener('mousemove', event => {

            mouseX = event.clientX;
            mouseY = event.clientY;

            cursorGlow.style.opacity = '1';

        });

        document.addEventListener('mouseleave', () => {
            cursorGlow.style.opacity = '0';
        });


        const animateGlow = () => {

            currentX += (mouseX - currentX) * 0.08;
            currentY += (mouseY - currentY) * 0.08;

            cursorGlow.style.left = `${currentX}px`;
            cursorGlow.style.top = `${currentY}px`;

            requestAnimationFrame(animateGlow);
        };

        animateGlow();
    }


    /*
    |--------------------------------------------------------------------------
    | Initial reveal animation
    |--------------------------------------------------------------------------
    */

    const revealElements = document.querySelectorAll('.reveal');

    revealElements.forEach((element, index) => {

        setTimeout(() => {

            element.classList.add('active');

        }, 150 + (index * 100));

    });

    /*
|--------------------------------------------------------------------------
| Scroll reveal
|--------------------------------------------------------------------------
*/

const scrollRevealElements =
    document.querySelectorAll('.scroll-reveal');

const revealObserver =
    new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                entry.target.classList.add('visible');

                revealObserver.unobserve(entry.target);
            }

        });

    }, {
        threshold: 0.15
    });


scrollRevealElements.forEach(element => {
    revealObserver.observe(element);
});


/*
|--------------------------------------------------------------------------
| Counter animation
|--------------------------------------------------------------------------
*/

const counters =
    document.querySelectorAll('.stat-number');

const counterObserver =
    new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (!entry.isIntersecting)
                return;

            const counter = entry.target;

            const target =
                Number(counter.dataset.target);

            const duration = 1500;

            const startTime =
                performance.now();


            const updateCounter = (currentTime) => {

                const elapsed =
                    currentTime - startTime;

                const progress =
                    Math.min(
                        elapsed / duration,
                        1
                    );

                /*
                 * Ease out cubic
                 */
                const eased =
                    1 - Math.pow(1 - progress, 3);

                counter.textContent =
                    Math.floor(target * eased);


                if (progress < 1) {

                    requestAnimationFrame(
                        updateCounter
                    );

                } else {

                    counter.textContent =
                        target;

                }
            };


            requestAnimationFrame(
                updateCounter
            );

            counterObserver.unobserve(
                counter
            );

        });

    }, {
        threshold: 0.6
    });


counters.forEach(counter => {
    counterObserver.observe(counter);
});

/*
|--------------------------------------------------------------------------
| Scroll progress
|--------------------------------------------------------------------------
*/

const scrollProgress =
    document.getElementById('scrollProgress');

const updateScrollProgress = () => {

    const scrollTop =
        window.scrollY;

    const documentHeight =
        document.documentElement.scrollHeight
        - window.innerHeight;

    const scrollPercentage =
        documentHeight > 0
            ? (scrollTop / documentHeight) * 100
            : 0;

    if (scrollProgress) {
        scrollProgress.style.width =
            `${scrollPercentage}%`;
    }
};

window.addEventListener(
    'scroll',
    updateScrollProgress,
    { passive: true }
);

updateScrollProgress();


/*
|--------------------------------------------------------------------------
| Active navbar section
|--------------------------------------------------------------------------
*/

const sections =
    document.querySelectorAll(
        'section[id]'
    );

const navLinks =
    document.querySelectorAll(
        '.nav-link'
    );


const updateActiveNavigation = () => {

    let currentSection = '';

    sections.forEach(section => {

        const sectionTop =
            section.offsetTop;

        const sectionHeight =
            section.offsetHeight;

        if (
            window.scrollY >=
            sectionTop - 250
        ) {
            currentSection =
                section.getAttribute('id');
        }

    });


    navLinks.forEach(link => {

        link.classList.remove('active');

        const href =
            link.getAttribute('href');

        if (
            href === `#${currentSection}`
        ) {
            link.classList.add('active');
        }

    });

};


window.addEventListener(
    'scroll',
    updateActiveNavigation,
    { passive: true }
);

updateActiveNavigation();

/*
|--------------------------------------------------------------------------
| Hero typing animation
|--------------------------------------------------------------------------
*/

const typingElement =
    document.getElementById('typingText');

const typingWords = [
    'Fullstack Web Developer',
    'Laravel Developer',
    'Backend Developer',
    'Web Application Developer'
];

let wordIndex = 0;
let characterIndex = 0;

let isDeleting = false;


const typeText = () => {

    if (!typingElement)
        return;


    const currentWord =
        typingWords[wordIndex];


    if (!isDeleting) {

        characterIndex++;

        typingElement.textContent =
            currentWord.substring(
                0,
                characterIndex
            );


        if (
            characterIndex ===
            currentWord.length
        ) {

            isDeleting = true;

            setTimeout(
                typeText,
                1600
            );

            return;
        }

    } else {

        characterIndex--;

        typingElement.textContent =
            currentWord.substring(
                0,
                characterIndex
            );


        if (characterIndex === 0) {

            isDeleting = false;

            wordIndex =
                (wordIndex + 1)
                % typingWords.length;
        }

    }


    const typingSpeed =
        isDeleting
            ? 35
            : 70;

    setTimeout(
        typeText,
        typingSpeed
    );

};


setTimeout(
    typeText,
    1000
);

});