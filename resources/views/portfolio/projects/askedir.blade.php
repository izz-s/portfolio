@extends('layouts.app')

@section('title', 'ASKEDIR — Faiz Pratama')

@section('meta_description',
    'ASKEDIR is a Personal Accident Claim Management System redesigned to improve insurance
    workflows and user experience.')

@section('og_title', 'ASKEDIR — Faiz Pratama')

@section('og_description',
    'Case study of a Personal Accident insurance system redesign focused on clearer claim
    workflows and interface improvements.')

@section('content')

    <div class="cursor-glow" id="cursorGlow"></div>


    {{-- =====================================================
         CASE STUDY NAVBAR
    ====================================================== --}}
    <nav class="case-navbar" id="navbar">

        <div class="container case-navbar-container">

            <a href="{{ route('home') }}" class="navbar-logo">
                FP<span>.</span>
            </a>

            <a href="{{ route('home') }}#projects" class="case-back">
                <span>←</span>
                Back to Projects
            </a>

        </div>

    </nav>


    {{-- =====================================================
         HERO
    ====================================================== --}}
    <section class="case-hero">

        <div class="hero-grid"></div>

        <div class="case-hero-glow"></div>


        <div class="container">

            <div class="case-breadcrumb reveal">

                <span>SELECTED WORK</span>

                <span>/</span>

                <span>02</span>

            </div>


            <h1 class="case-title reveal">
                ASKE
                <span>DIR.</span>
            </h1>


            <div class="case-hero-bottom">

                <p class="case-description reveal">
                    Personal Accident Claim Management System
                    redesigned to create clearer insurance workflows
                    and a more structured user experience.
                </p>


                <div class="case-meta reveal">

                    <div>
                        <span>ROLE</span>
                        <p>Web Developer</p>
                    </div>

                    <div>
                        <span>YEAR</span>
                        <p>2026</p>
                    </div>

                    <div>
                        <span>TYPE</span>
                        <p>Web Application</p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         LARGE PROJECT PREVIEW
    ====================================================== --}}
    <section class="case-preview">

        <div class="container">

            <div class="case-browser scroll-reveal">

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


                <div class="case-project-image">

                    <img src="{{ asset('images/projects/askedir/dashboard.webp') }}"
                        alt="ASKEDIR Claim Management Dashboard" loading="eager">

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         01 — OVERVIEW
    ====================================================== --}}
    <section class="case-section">

        <div class="container case-section-grid">

            <div class="case-section-label scroll-reveal">

                <span>01</span>

                <p>OVERVIEW</p>

            </div>


            <div class="case-section-content">

                <h2 class="scroll-reveal">
                    Redesigning an existing
                    <span>insurance workflow.</span>
                </h2>


                <div class="case-copy-grid">

                    <p class="scroll-reveal">
                        ASKEDIR is a web-based Personal Accident
                        insurance claim management system used to
                        manage policy data, insured participants,
                        claim submissions, verification processes,
                        and claim settlement workflows.
                    </p>


                    <p class="scroll-reveal">
                        My contribution focused on redesigning and
                        improving the existing application interface,
                        clarifying navigation and operational flows,
                        while also continuing feature development
                        and troubleshooting within the existing system.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         02 — INTERFACE
    ====================================================== --}}
    <section class="case-gallery">

        <div class="container">

            <div class="case-gallery-heading">

                <div class="case-section-label scroll-reveal">

                    <span>02</span>

                    <p>INTERFACE</p>

                </div>


                <div>

                    <h2 class="scroll-reveal">
                        Built around the
                        <span>claim lifecycle.</span>
                    </h2>


                    <p class="case-gallery-intro scroll-reveal">
                        The redesigned interface organizes policy,
                        claim, and verification processes into
                        dedicated workflows, making operational
                        information easier to navigate and understand.
                    </p>

                </div>

            </div>


            <div class="case-gallery-list">


                {{-- =================================================
                     POLICY MANAGEMENT
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Policy Management
                            </h3>

                        </div>


                        <p>
                            A structured policy management interface
                            for viewing insurance policies, insured
                            parties, coverage periods, and previous
                            policy references in one place.
                        </p>

                    </div>


                    <div class="gallery-browser scroll-reveal">

                        <div class="browser-header">

                            <div class="browser-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-address">
                                ASKEDIR / Policy Management
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/askedir/polis.webp') }}" alt="ASKEDIR Policy Management"
                                loading="lazy">

                        </div>

                    </div>

                </article>


                {{-- =================================================
                     CLAIM MANAGEMENT
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Claim Management
                            </h3>

                        </div>


                        <p>
                            Centralized claim data with visible
                            workflow statuses, allowing users to
                            follow claims from the initial report
                            through document processing, payment,
                            and settlement.
                        </p>

                    </div>


                    <div class="gallery-browser scroll-reveal">

                        <div class="browser-header">

                            <div class="browser-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-address">
                                ASKEDIR / Claim Management
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/askedir/klaim.webp') }}" alt="ASKEDIR Claim Management"
                                loading="lazy">

                        </div>

                    </div>

                </article>


                {{-- =================================================
                     CLAIM VERIFICATION
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Claim Verification
                            </h3>

                        </div>


                        <p>
                            A dedicated verification workflow for
                            reviewing initial claim reports and
                            continuing claims through document
                            and payment verification stages.
                        </p>

                    </div>


                    <div class="gallery-browser scroll-reveal">

                        <div class="browser-header">

                            <div class="browser-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="browser-address">
                                ASKEDIR / Claim Verification
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/askedir/verifikasi.webp') }}"
                                alt="ASKEDIR Claim Verification" loading="lazy">

                        </div>

                    </div>

                </article>

            </div>

        </div>

    </section>


    {{-- =====================================================
         03 — THE CHALLENGE
    ====================================================== --}}
    <section class="case-section case-dark-section">

        <div class="container case-section-grid">

            <div class="case-section-label scroll-reveal">

                <span>03</span>

                <p>THE CHALLENGE</p>

            </div>


            <div class="case-section-content">

                <h2 class="scroll-reveal">
                    Improving an existing system
                    <span>without losing its workflow.</span>
                </h2>


                <p class="case-large-copy scroll-reveal">
                    ASKEDIR was an existing application with established
                    insurance processes and business logic. The challenge
                    was improving its interface and navigation while
                    preserving the workflows users already depended on
                    for policy and claim operations.
                </p>


                <div class="challenge-grid">


                    {{-- CHALLENGE 01 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Existing Application
                        </h3>

                        <p>
                            Development had to continue on top of an
                            existing codebase and business process
                            instead of starting from a completely
                            new application.
                        </p>

                    </article>


                    {{-- CHALLENGE 02 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Workflow Clarity
                        </h3>

                        <p>
                            Policy, claim, verification, and settlement
                            processes needed clearer navigation and
                            stronger visual hierarchy for users.
                        </p>

                    </article>


                    {{-- CHALLENGE 03 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            Business Logic Continuity
                        </h3>

                        <p>
                            Interface improvements and new development
                            needed to remain compatible with the
                            application's existing insurance logic
                            and operational flow.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         04 — MY ROLE
    ====================================================== --}}
    <section class="case-section">

        <div class="container case-section-grid">

            <div class="case-section-label scroll-reveal">

                <span>04</span>

                <p>MY ROLE</p>

            </div>


            <div class="case-section-content">

                <h2 class="scroll-reveal">
                    Redesigning the experience
                    <span>while extending the system.</span>
                </h2>


                <div class="role-list">


                    {{-- ROLE 01 --}}
                    <div class="role-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Interface Redesign
                        </h3>

                        <p>
                            Redesigned existing application screens
                            with a cleaner visual hierarchy, improved
                            navigation, and a more consistent interface
                            across the system.
                        </p>

                    </div>


                    {{-- ROLE 02 --}}
                    <div class="role-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Frontend Development
                        </h3>

                        <p>
                            Implemented redesigned interfaces and
                            interactions while adapting them to the
                            application's existing workflows and
                            functionality.
                        </p>

                    </div>


                    {{-- ROLE 03 --}}
                    <div class="role-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            Feature Development
                        </h3>

                        <p>
                            Continued development of the existing
                            application by adding and improving
                            functionality required by insurance
                            operational processes.
                        </p>

                    </div>


                    {{-- ROLE 04 --}}
                    <div class="role-item scroll-reveal">

                        <span>04</span>

                        <h3>
                            Debugging & Maintenance
                        </h3>

                        <p>
                            Investigated application issues,
                            troubleshot existing functionality,
                            and maintained features while working
                            within the established codebase.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         05 — TECHNOLOGY
    ====================================================== --}}
    <section class="case-tech">

        <div class="container">

            <div class="case-section-label scroll-reveal">

                <span>05</span>

                <p>TECHNOLOGY</p>

            </div>


            <div class="case-tech-grid">


                {{-- LARAVEL --}}
                <div class="case-tech-item scroll-reveal">

                    <span>01</span>

                    <h3>Laravel</h3>

                    <p>
                        Web application development
                    </p>

                </div>


                {{-- MYSQL --}}
                <div class="case-tech-item scroll-reveal">

                    <span>02</span>

                    <h3>MySQL</h3>

                    <p>
                        Application data management
                    </p>

                </div>


                {{-- JAVASCRIPT --}}
                <div class="case-tech-item scroll-reveal">

                    <span>03</span>

                    <h3>JavaScript</h3>

                    <p>
                        Interface interaction and functionality
                    </p>

                </div>


                {{-- GIT --}}
                <div class="case-tech-item scroll-reveal">

                    <span>04</span>

                    <h3>Git / Bitbucket</h3>

                    <p>
                        Source code and version control
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         NEXT PROJECT
    ====================================================== --}}
    <section class="next-project">

        <div class="container">

            <span class="next-label scroll-reveal">
                NEXT PROJECT
            </span>


            <a href="{{ route('projects.company-profile') }}" class="next-project-link scroll-reveal">

                <div>

                    <span>03</span>

                    <h2>
                        COMPANY PROFILE
                    </h2>

                </div>


                <span class="next-arrow">
                    ↗
                </span>

            </a>

        </div>

    </section>

@endsection
