@extends('layouts.app')

@section('title', 'Faiz Pratama — Fullstack Web Developer')

@section('meta_description',
    'Portfolio of Faiz Pratama, a Fullstack Web Developer building modern web applications with
    Laravel, MySQL, JavaScript, and REST API.')

@section('og_title', 'Faiz Pratama — Fullstack Web Developer')

@section('og_description',
    'Explore selected web development projects including insurance management systems and modern
    corporate websites.')

@section('content')

    {{-- Mouse Glow --}}
    <div class="cursor-glow" id="cursorGlow"></div>

    {{-- Navbar --}}
    <x-navbar />

    {{-- Hero --}}
    <section class="hero" id="home">

        <div class="hero-grid"></div>
        <div class="hero-glow"></div>

        <div class="container hero-container">

            <div class="hero-content">

                <div class="availability reveal">
                    <span class="availability-dot"></span>
                    Available for opportunities
                </div>

                <p class="hero-intro reveal">
                    Hello, I'm
                </p>

                <h1 class="hero-title reveal">
                    Faiz
                    <span>Pratama.</span>
                </h1>

                <div class="hero-role reveal">

                    <span class="role-line"></span>

                    <p>
                        <span class="typing-text" id="typingText"></span>

                        <span class="typing-cursor">|</span>
                    </p>

                </div>

                <p class="hero-description reveal">
                    I build modern, scalable and intuitive web applications
                    with <strong>Laravel</strong>, <strong>JavaScript</strong>,
                    and <strong>REST APIs</strong>.
                </p>

                <div class="hero-actions reveal">

                    <a href="#projects" class="btn btn-primary">
                        View Projects

                        <span class="btn-arrow">
                            ↓
                        </span>
                    </a>

                    <a href="#contact" class="btn btn-secondary">
                        Contact Me

                        <span>
                            ↗
                        </span>
                    </a>

                </div>

                <div class="hero-social reveal">

                    <span class="social-label">
                        FIND ME ONLINE
                    </span>

                    <div class="social-line"></div>

                    <a href="https://www.linkedin.com/in/faiz-pratama-302b1b2a8/" target="_blank" rel="noopener noreferrer">
                        LinkedIn
                    </a>

                    <a href="https://wa.me/6287716180033" target="_blank" rel="noopener noreferrer">
                        WhatsApp
                    </a>

                </div>

            </div>

            <div class="hero-visual reveal">

                <div class="code-window">

                    <div class="code-header">

                        <div class="code-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <span class="code-file">
                            developer.php
                        </span>

                    </div>

                    <div class="code-body">

                        <div class="code-line">
                            <span class="line-number">01</span>
                            <span>
                                <span class="code-purple">&lt;?php</span>
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">02</span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">03</span>

                            <span>
                                <span class="code-purple">class</span>
                                <span class="code-blue"> Developer</span>
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">04</span>
                            <span>{</span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">05</span>

                            <span>
                                &nbsp;&nbsp;<span class="code-purple">public</span>
                                <span class="code-blue">$name</span>
                                =
                                <span class="code-green">'Faiz Pratama'</span>;
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">06</span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">07</span>

                            <span>
                                &nbsp;&nbsp;<span class="code-purple">public</span>
                                <span class="code-blue">$stack</span>
                                = [
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">08</span>

                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">'Laravel'</span>,
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">09</span>

                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">'JavaScript'</span>,
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">10</span>

                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">'MySQL'</span>,
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">11</span>

                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="code-green">'REST API'</span>
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">12</span>

                            <span>
                                &nbsp;&nbsp;];
                            </span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">13</span>
                            <span>}</span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">14</span>
                        </div>

                        <div class="code-line">
                            <span class="line-number">15</span>

                            <span class="code-comment">
                                // Let's build something great.
                            </span>
                        </div>

                    </div>

                </div>

                <div class="floating-tag tag-laravel">
                    Laravel
                </div>

                <div class="floating-tag tag-api">
                    REST API
                </div>

            </div>

        </div>

        <div class="scroll-indicator">
            <span>SCROLL</span>

            <div class="scroll-line">
                <div></div>
            </div>
        </div>

    </section>

    {{-- About --}}
    <section class="about section" id="about">

        <div class="container">

            <div class="section-heading scroll-reveal">
                <div class="section-number">
                    <span>01</span>
                    <div></div>
                </div>

                <span class="section-eyebrow">ABOUT ME</span>
            </div>


            <div class="about-layout">

                <div class="about-title scroll-reveal">

                    <h2>
                        Building things
                        <span>for the web.</span>
                    </h2>

                </div>


                <div class="about-content">

                    <p class="about-lead scroll-reveal">
                        I'm a <strong>Fullstack Web Developer</strong> focused on
                        building web applications that are functional,
                        maintainable, and enjoyable to use.
                    </p>

                    <p class="about-text scroll-reveal">
                        I work primarily with Laravel, JavaScript, MySQL and REST APIs,
                        handling both frontend interfaces and backend logic. I enjoy
                        turning complex workflows into simple and intuitive digital
                        experiences.
                    </p>

                    <div class="about-link-wrapper scroll-reveal">
                        <a href="#projects" class="text-link">
                            More about my work
                            <span>↘</span>
                        </a>
                    </div>

                </div>

            </div>


            {{-- Statistics --}}
            <div class="about-stats">

                <div class="stat-item scroll-reveal">
                    <span class="stat-number" data-target="5">0</span>
                    <span class="stat-plus">+</span>

                    <p>Projects Built</p>
                </div>

                <div class="stat-item scroll-reveal">
                    <span class="stat-number" data-target="4">0</span>
                    <span class="stat-plus">+</span>

                    <p>Technologies</p>
                </div>

                <div class="stat-item scroll-reveal">
                    <span class="stat-number" data-target="100">0</span>
                    <span class="stat-plus">%</span>

                    <p>Curiosity</p>
                </div>

            </div>

        </div>

    </section>


    {{-- Tech Marquee --}}
    <section class="tech-marquee" aria-hidden="true">

        <div class="marquee-track">

            <div class="marquee-content">
                <span>LARAVEL</span>
                <i>✦</i>
                <span>PHP</span>
                <i>✦</i>
                <span>JAVASCRIPT</span>
                <i>✦</i>
                <span>MYSQL</span>
                <i>✦</i>
                <span>REST API</span>
                <i>✦</i>
                <span>GIT</span>
                <i>✦</i>
                <span>BITBUCKET</span>
                <i>✦</i>
            </div>

            {{-- duplicate untuk infinite animation --}}
            <div class="marquee-content">
                <span>LARAVEL</span>
                <i>✦</i>
                <span>PHP</span>
                <i>✦</i>
                <span>JAVASCRIPT</span>
                <i>✦</i>
                <span>MYSQL</span>
                <i>✦</i>
                <span>REST API</span>
                <i>✦</i>
                <span>GIT</span>
                <i>✦</i>
                <span>BITBUCKET</span>
                <i>✦</i>
            </div>

        </div>

    </section>


    {{-- Skills --}}
    <section class="skills section" id="skills">

        <div class="container">

            <div class="section-heading scroll-reveal">

                <div class="section-number">
                    <span>02</span>
                    <div></div>
                </div>

                <span class="section-eyebrow">
                    TECH STACK
                </span>

            </div>


            <div class="skills-header">

                <h2 class="scroll-reveal">
                    Tools I use to
                    <span>build things.</span>
                </h2>

                <p class="scroll-reveal">
                    Technologies I work with to turn ideas into
                    functional web applications.
                </p>

            </div>


            <div class="skills-grid">

                <article class="skill-card scroll-reveal">

                    <div class="skill-top">
                        <span class="skill-index">01</span>

                        <span class="skill-type">
                            BACKEND
                        </span>
                    </div>

                    <div class="skill-icon">
                        L
                    </div>

                    <h3>Laravel</h3>

                    <p>
                        Building structured backend applications,
                        APIs and business logic.
                    </p>

                    <div class="skill-tags">
                        <span>PHP</span>
                        <span>MVC</span>
                        <span>API</span>
                    </div>

                </article>


                <article class="skill-card scroll-reveal">

                    <div class="skill-top">
                        <span class="skill-index">02</span>

                        <span class="skill-type">
                            FRONTEND
                        </span>
                    </div>

                    <div class="skill-icon">
                        JS
                    </div>

                    <h3>JavaScript</h3>

                    <p>
                        Creating interactive interfaces and dynamic
                        frontend experiences.
                    </p>

                    <div class="skill-tags">
                        <span>ES6+</span>
                        <span>DOM</span>
                        <span>AJAX</span>
                    </div>

                </article>


                <article class="skill-card scroll-reveal">

                    <div class="skill-top">
                        <span class="skill-index">03</span>

                        <span class="skill-type">
                            DATABASE
                        </span>
                    </div>

                    <div class="skill-icon">
                        DB
                    </div>

                    <h3>MySQL</h3>

                    <p>
                        Designing relational databases and managing
                        application data efficiently.
                    </p>

                    <div class="skill-tags">
                        <span>SQL</span>
                        <span>Relational</span>
                        <span>Query</span>
                    </div>

                </article>


                <article class="skill-card scroll-reveal">

                    <div class="skill-top">
                        <span class="skill-index">04</span>

                        <span class="skill-type">
                            INTEGRATION
                        </span>
                    </div>

                    <div class="skill-icon">
                        API
                    </div>

                    <h3>REST API</h3>

                    <p>
                        Connecting frontend and backend systems
                        through clean API architecture.
                    </p>

                    <div class="skill-tags">
                        <span>JSON</span>
                        <span>HTTP</span>
                        <span>Auth</span>
                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- Projects --}}
    <section class="projects section" id="projects">

        <div class="container">

            <div class="section-heading scroll-reveal">
                <div class="section-number">
                    <span>03</span>
                    <div></div>
                </div>

                <span class="section-eyebrow">
                    SELECTED WORK
                </span>
            </div>


            <div class="projects-header">

                <h2 class="scroll-reveal">
                    Things I've
                    <span>built.</span>
                </h2>

                <div class="projects-intro scroll-reveal">
                    <p>
                        A selection of web applications I've worked on,
                        focusing on solving real problems through clean
                        interfaces and structured backend systems.
                    </p>

                    <span>2025 — 2026</span>
                </div>

            </div>


            <div class="project-list">

                {{-- =====================================================
     PROJECT 01 — EB HEALTH
====================================================== --}}
                <article class="project-item scroll-reveal">

                    <div class="project-visual">

                        <div class="project-browser">

                            <div class="browser-header">

                                <div class="browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="browser-address">
                                    EB Health / Dashboard
                                </div>

                                <div class="browser-menu">
                                    •••
                                </div>

                            </div>


                            <div class="project-real-preview">

                                <img src="{{ asset('images/projects/eb-health/dashboard.webp') }}"
                                    alt="EB Health Dashboard" loading="lazy">

                            </div>

                        </div>


                        <div class="project-number">
                            01
                        </div>

                    </div>


                    <div class="project-info">

                        <div class="project-meta">
                            <span>WEB APPLICATION</span>
                            <span>2026</span>
                        </div>


                        <h3>
                            EB Health
                        </h3>


                        <p class="project-subtitle">
                            Employee Benefit Insurance Management System
                        </p>


                        <p class="project-description">
                            Development of a web-based Employee Benefit insurance
                            management system with separated frontend and backend
                            applications, supporting company, policy, benefit,
                            endorsement, and claim workflows.
                        </p>


                        <div class="project-role">

                            <div>
                                <span>ROLE</span>
                                <p>Fullstack Developer</p>
                            </div>

                            <div>
                                <span>FOCUS</span>
                                <p>Frontend, Backend & API</p>
                            </div>

                        </div>

                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>REST API</span>
                            <span>Blade</span>
                            <span>Git / Bitbucket</span>
                        </div>


                        <a href="{{ route('projects.eb-health') }}" class="project-link">
                            View Case Study

                            <span>↗</span>
                        </a>

                    </div>

                </article>

                {{-- =====================================================
     PROJECT 02 — ASKEDIR
====================================================== --}}
                <article class="project-item project-reverse scroll-reveal">

                    <div class="project-visual">

                        <div class="project-browser">

                            <div class="browser-header">

                                <div class="browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="browser-address">
                                    ASKEDIR / Dashboard
                                </div>

                                <div class="browser-menu">
                                    •••
                                </div>

                            </div>


                            <div class="project-real-preview">

                                <img src="{{ asset('images/projects/askedir/dashboard.webp') }}"
                                    alt="ASKEDIR Claim Management Dashboard" loading="lazy">

                            </div>

                        </div>


                        <div class="project-number">
                            02
                        </div>

                    </div>


                    <div class="project-info">

                        <div class="project-meta">
                            <span>WEB APPLICATION</span>
                            <span>2026</span>
                        </div>


                        <h3>
                            ASKEDIR
                        </h3>


                        <p class="project-subtitle">
                            Personal Accident Claim Management System
                        </p>


                        <p class="project-description">
                            Redesign and continued development of an existing
                            personal accident insurance application, improving
                            interface consistency, navigation, and claim workflows
                            while maintaining the system's existing business processes.
                        </p>


                        <div class="project-role">

                            <div>
                                <span>ROLE</span>
                                <p>Web Developer</p>
                            </div>

                            <div>
                                <span>FOCUS</span>
                                <p>UI Redesign & Workflow</p>
                            </div>

                        </div>


                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>Blade</span>
                            <span>Git / Bitbucket</span>
                        </div>


                        <a href="{{ route('projects.askedir') }}" class="project-link">
                            View Case Study

                            <span>↗</span>
                        </a>

                    </div>

                </article>


                {{-- =====================================================
     PROJECT 03 — COMPANY PROFILE
====================================================== --}}
                <article class="project-item scroll-reveal">

                    <div class="project-visual">

                        <div class="project-browser">

                            <div class="browser-header">

                                <div class="browser-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="browser-address">
                                    SJU / Company Profile
                                </div>

                                <div class="browser-menu">
                                    •••
                                </div>

                            </div>


                            <div class="project-real-preview">

                                <img src="{{ asset('images/projects/company-profile/homepage.webp') }}"
                                    alt="Sarana Janesia Utama Company Profile" loading="lazy">

                            </div>

                        </div>


                        <div class="project-number">
                            03
                        </div>

                    </div>


                    <div class="project-info">

                        <div class="project-meta">
                            <span>COMPANY WEBSITE</span>
                            <span>2026</span>
                        </div>


                        <h3>
                            Company Profile
                        </h3>


                        <p class="project-subtitle">
                            Corporate Website & Content Management
                        </p>


                        <p class="project-description">
                            Redesign and development of a modern corporate website
                            for an insurance broker, improving visual presentation,
                            information structure, and the way company services
                            are presented to visitors.
                        </p>


                        <div class="project-role">

                            <div>
                                <span>ROLE</span>
                                <p>Web Developer</p>
                            </div>

                            <div>
                                <span>FOCUS</span>
                                <p>Redesign & Development</p>
                            </div>

                        </div>


                        <div class="project-tech">
                            <span>Laravel</span>
                            <span>MySQL</span>
                            <span>JavaScript</span>
                            <span>Blade</span>
                            <span>Git / Bitbucket</span>
                        </div>


                        <a href="{{ route('projects.company-profile') }}" class="project-link">
                            View Case Study

                            <span>↗</span>
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- Experience --}}
    <section class="experience section" id="experience">

        <div class="container">

            <div class="section-heading scroll-reveal">

                <div class="section-number">
                    <span>04</span>
                    <div></div>
                </div>

                <span class="section-eyebrow">
                    EXPERIENCE
                </span>

            </div>


            <div class="experience-header">

                <h2 class="scroll-reveal">
                    Where I've
                    <span>worked.</span>
                </h2>

                <p class="scroll-reveal">
                    My journey building real-world web applications,
                    solving business problems, and continuously
                    improving as a developer.
                </p>

            </div>


            <div class="experience-list">

                {{-- EXPERIENCE 01 --}}
                <article class="experience-item scroll-reveal">

                    <div class="experience-date">
                        <span>June 2025</span>
                        <div></div>
                        <span>NOW</span>
                    </div>


                    <div class="experience-main">

                        <div class="experience-position">

                            <span class="experience-number">
                                01
                            </span>

                            <div>
                                <h3>
                                    Web Developer Intern
                                </h3>

                                <p>
                                    PT Sarana Janesia Utama Insurance Broker
                                </p>
                            </div>

                        </div>


                        <div class="experience-details">

                            <p>
                                Developing and maintaining web applications
                                to support internal insurance business
                                processes, working across frontend and
                                backend development.
                            </p>

                            <ul>
                                <li>
                                    Developed frontend interfaces and
                                    backend functionality using Laravel.
                                </li>

                                <li>
                                    Built and integrated REST API-based
                                    application workflows.
                                </li>

                                <li>
                                    Worked on insurance systems including
                                    Employee Benefit and Personal Accident.
                                </li>

                                <li>
                                    Managed source code and collaboration
                                    using Git and Bitbucket.
                                </li>
                            </ul>


                            <div class="experience-stack">
                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>
                                <span>REST API</span>
                                <span>Git</span>
                            </div>

                        </div>

                    </div>

                </article>


                {{-- EXPERIENCE 02 --}}
                <article class="experience-item scroll-reveal">

                    <div class="experience-date">
                        <span>July 2024</span>
                        <div></div>
                        <span>September 2024</span>
                    </div>


                    <div class="experience-main">

                        <div class="experience-position">

                            <span class="experience-number">
                                02
                            </span>

                            <div>
                                <h3>
                                    Web Developer Intern
                                </h3>

                                <p>
                                    PT Ret Technology Solutions
                                </p>
                            </div>

                        </div>


                        <div class="experience-details">

                            <p>
                                Gained hands-on experience developing
                                web-based systems and working with
                                databases in a professional environment.
                            </p>

                            <ul>
                                <li>
                                    Participated in discussions and
                                    development of website features.
                                </li>

                                <li>
                                    Developed an administration website
                                    for student data management.
                                </li>

                                <li>
                                    Built a web-based employee payroll
                                    data management system.
                                </li>

                                <li>
                                    Worked with relational databases
                                    and application data.
                                </li>
                            </ul>


                            <div class="experience-stack">
                                <span>PHP</span>
                                <span>MySQL</span>
                                <span>JavaScript</span>
                                <span>HTML</span>
                                <span>CSS</span>
                            </div>

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- Contact --}}
    <section class="contact section" id="contact">

        <div class="contact-glow"></div>

        <div class="container">

            <div class="section-heading scroll-reveal">

                <div class="section-number">
                    <span>05</span>
                    <div></div>
                </div>

                <span class="section-eyebrow">
                    CONTACT
                </span>

            </div>


            <div class="contact-header">

                <p class="contact-small scroll-reveal">
                    HAVE A PROJECT OR OPPORTUNITY?
                </p>

                <a href="mailto:pratamafaiz1010@gmail.com" class="contact-title scroll-reveal">
                    <span>LET'S BUILD</span>

                    <span class="contact-title-bottom">
                        SOMETHING GREAT.

                        <span class="contact-arrow">
                            ↗
                        </span>
                    </span>
                </a>

            </div>


            <div class="contact-info">

                {{-- EMAIL --}}
                <a href="mailto:pratamafaiz1010@gmail.com" class="contact-item scroll-reveal">

                    <span class="contact-label">
                        EMAIL
                    </span>

                    <div class="contact-value">
                        <span>
                            pratamafaiz1010@gmail.com
                        </span>

                        <span class="contact-icon">
                            ↗
                        </span>
                    </div>

                </a>


                {{-- WHATSAPP --}}
                <a href="https://wa.me/6287716180033" target="_blank" rel="noopener noreferrer"
                    class="contact-item scroll-reveal">

                    <span class="contact-label">
                        WHATSAPP
                    </span>

                    <div class="contact-value">
                        <span>
                            +62 877-1618-0033
                        </span>

                        <span class="contact-icon">
                            ↗
                        </span>
                    </div>

                </a>


                {{-- LINKEDIN --}}
                <a href="https://www.linkedin.com/in/faiz-pratama-302b1b2a8/" target="_blank" rel="noopener noreferrer"
                    class="contact-item scroll-reveal">

                    <span class="contact-label">
                        LINKEDIN
                    </span>

                    <div class="contact-value">
                        <span>
                            Connect with me
                        </span>

                        <span class="contact-icon">
                            ↗
                        </span>
                    </div>

                </a>


                {{-- LOCATION --}}
                <div class="contact-item scroll-reveal">

                    <span class="contact-label">
                        LOCATION
                    </span>

                    <div class="contact-value">
                        <span>
                            Depok, Indonesia
                        </span>

                        <span class="contact-status">
                            GMT+7
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- Footer --}}
    <footer class="footer">

        <div class="container">

            <div class="footer-top">

                <div class="footer-brand">
                    <a href="#home">
                        FP<span>.</span>
                    </a>

                    <p>
                        Fullstack Web Developer
                    </p>
                </div>


                <div class="footer-nav">

                    <div>
                        <span>NAVIGATION</span>

                        <a href="#about">About</a>
                        <a href="#skills">Skills</a>
                        <a href="#projects">Projects</a>
                        <a href="#experience">Experience</a>
                    </div>


                    <div>
                        <span>SOCIAL</span>

                        <a href="https://www.linkedin.com/in/faiz-pratama-302b1b2a8/" target="_blank"
                            rel="noopener noreferrer">
                            LinkedIn ↗
                        </a>

                        <a href="https://wa.me/6287716180033" target="_blank" rel="noopener noreferrer">
                            WhatsApp ↗
                        </a>
                    </div>

                </div>

            </div>


            <div class="footer-bottom">

                <p>
                    © {{ date('Y') }} Faiz Pratama
                </p>

                <p class="footer-built">
                    BUILT WITH
                    <span>Laravel</span>
                    & Caffeine
                </p>

                <a href="#home" class="back-to-top">
                    BACK TO TOP

                    <span>↑</span>
                </a>

            </div>

        </div>

    </footer>

@endsection
