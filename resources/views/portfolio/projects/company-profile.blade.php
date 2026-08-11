@extends('layouts.app')

@section('title', 'Company Profile — Faiz Pratama')

@section('meta_description',
    'Corporate website redesign and development focused on modernizing company presentation,
    services, and digital identity.')

@section('og_title', 'Company Profile — Faiz Pratama')

@section('og_description', 'Case study of a modern corporate website redesign and development project.')

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

                <span>03</span>

            </div>


            <h1 class="case-title reveal">
                Company
                <span>Profile.</span>
            </h1>


            <div class="case-hero-bottom">

                <p class="case-description reveal">
                    Corporate website redesigned and developed
                    to create a clearer, more modern, and
                    professional digital presence.
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
                        <p>Corporate Website</p>
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
                        SJU / Company Profile
                    </div>

                    <div class="browser-menu">
                        •••
                    </div>

                </div>


                <div class="case-project-image">

                    <img src="{{ asset('images/projects/company-profile/homepage.webp') }}"
                        alt="Sarana Janesia Utama Company Profile Homepage" loading="eager">

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
                    Modernizing a corporate
                    <span>digital presence.</span>
                </h2>


                <div class="case-copy-grid">

                    <p class="scroll-reveal">
                        This project focused on redesigning and
                        developing the company profile website of
                        an insurance broker, creating a more modern
                        presentation for company information,
                        services, and business identity.
                    </p>


                    <p class="scroll-reveal">
                        The website was restructured to improve
                        visual hierarchy, navigation, and content
                        presentation while providing visitors with
                        clearer access to company information,
                        insurance services, and contact details.
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
                        Designed for clarity
                        <span>and credibility.</span>
                    </h2>


                    <p class="case-gallery-intro scroll-reveal">
                        The interface combines clear typography,
                        structured content, focused navigation,
                        and consistent visual elements to present
                        the company and its services professionally.
                    </p>

                </div>

            </div>


            <div class="case-gallery-list">


                {{-- =================================================
                     COMPANY INTRODUCTION
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Company Introduction
                            </h3>

                        </div>


                        <p>
                            A structured company introduction that
                            presents the organization's profile,
                            vision, and mission through a cleaner
                            layout with stronger information hierarchy.
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
                                SJU / About Company
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/company-profile/about.webp') }}"
                                alt="Sarana Janesia Utama About Company" loading="lazy">

                        </div>

                    </div>

                </article>


                {{-- =================================================
                     SERVICES
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Professional Services
                            </h3>

                        </div>


                        <p>
                            Company services are organized into
                            dedicated sections for consulting,
                            insurance broking, and claim handling,
                            making each service easier for visitors
                            to understand and explore.
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
                                SJU / Services
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/company-profile/services.webp') }}"
                                alt="Sarana Janesia Utama Professional Services" loading="lazy">

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
                    Turning company information
                    <span>into a modern experience.</span>
                </h2>


                <p class="case-large-copy scroll-reveal">
                    The challenge was not only updating the visual
                    appearance of the website, but also reorganizing
                    company information and services into a clearer
                    digital experience that could better represent
                    the company's professional identity.
                </p>


                <div class="challenge-grid">


                    {{-- CHALLENGE 01 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Visual Modernization
                        </h3>

                        <p>
                            The existing presentation needed a more
                            contemporary visual direction while still
                            maintaining a professional corporate
                            identity.
                        </p>

                    </article>


                    {{-- CHALLENGE 02 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Information Hierarchy
                        </h3>

                        <p>
                            Company information, services, and
                            supporting content needed to be organized
                            so visitors could understand the business
                            more quickly.
                        </p>

                    </article>


                    {{-- CHALLENGE 03 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            Consistent Experience
                        </h3>

                        <p>
                            Navigation, typography, components,
                            spacing, and page structures needed a
                            consistent design language across
                            the website.
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
                    From redesign
                    <span>to implementation.</span>
                </h2>


                <div class="role-list">


                    {{-- ROLE 01 --}}
                    <div class="role-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Interface Redesign
                        </h3>

                        <p>
                            Redesigned the website interface with
                            a more modern visual direction, clearer
                            content hierarchy, and consistent
                            components across pages.
                        </p>

                    </div>


                    {{-- ROLE 02 --}}
                    <div class="role-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Frontend Development
                        </h3>

                        <p>
                            Implemented responsive page layouts,
                            navigation, content sections, components,
                            and interactive elements for the
                            redesigned website.
                        </p>

                    </div>


                    {{-- ROLE 03 --}}
                    <div class="role-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            Backend Development
                        </h3>

                        <p>
                            Developed and integrated Laravel
                            functionality required to support
                            website content and application
                            management.
                        </p>

                    </div>


                    {{-- ROLE 04 --}}
                    <div class="role-item scroll-reveal">

                        <span>04</span>

                        <h3>
                            Content Structure
                        </h3>

                        <p>
                            Organized company information and
                            service content into clearer sections
                            to improve readability and navigation
                            throughout the website.
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
                        Web application framework
                    </p>

                </div>


                {{-- MYSQL --}}
                <div class="case-tech-item scroll-reveal">

                    <span>02</span>

                    <h3>MySQL</h3>

                    <p>
                        Website data management
                    </p>

                </div>


                {{-- JAVASCRIPT --}}
                <div class="case-tech-item scroll-reveal">

                    <span>03</span>

                    <h3>JavaScript</h3>

                    <p>
                        Interface interaction
                    </p>

                </div>


                {{-- BLADE --}}
                <div class="case-tech-item scroll-reveal">

                    <span>04</span>

                    <h3>Blade</h3>

                    <p>
                        Laravel template development
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         NEXT PROJECT / BACK TO PROJECTS
    ====================================================== --}}
    <section class="next-project">

        <div class="container">

            <span class="next-label scroll-reveal">
                SELECTED WORK
            </span>


            <a href="{{ route('home') }}#projects" class="next-project-link scroll-reveal">

                <div>

                    <span>01 — 03</span>

                    <h2>
                        ALL PROJECTS
                    </h2>

                </div>


                <span class="next-arrow">
                    ↗
                </span>

            </a>

        </div>

    </section>

@endsection
