@extends('layouts.app')

@section('title', 'EB Health — Faiz Pratama')

@section('meta_description',
    'EB Health is an Employee Benefit Insurance Management System developed using Laravel,
    MySQL, JavaScript, and REST API.')

@section('og_title', 'EB Health — Faiz Pratama')

@section('og_description',
    'Case study of an Employee Benefit Insurance Management System built with Laravel and REST
    API.')

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

                <span>01</span>

            </div>


            <h1 class="case-title reveal">
                EB
                <span>Health.</span>
            </h1>


            <div class="case-hero-bottom">

                <p class="case-description reveal">
                    Employee Benefit Insurance Management System
                    built to support insurance operations through
                    an integrated web-based application.
                </p>


                <div class="case-meta reveal">

                    <div>
                        <span>ROLE</span>
                        <p>Fullstack Developer</p>
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
                        EB Health / Dashboard
                    </div>

                    <div class="browser-menu">
                        •••
                    </div>

                </div>


                <div class="case-project-image">

                    <img src="{{ asset('images/projects/eb-health/dashboard.webp') }}" alt="EB Health Dashboard"
                        loading="eager">

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
                    Managing complex workflows
                    <span>through one system.</span>
                </h2>


                <div class="case-copy-grid">

                    <p class="scroll-reveal">
                        EB Health is a web-based Employee Benefit
                        insurance management system developed to support
                        operational processes such as company management,
                        policy data, employee benefits, endorsement,
                        and claim workflows.
                    </p>


                    <p class="scroll-reveal">
                        The application uses a separated frontend and
                        backend architecture. I worked on both sides of
                        the system, building Laravel-based interfaces,
                        processing business logic, and integrating data
                        through REST API endpoints.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         02 — INTERFACE SHOWCASE
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
                        Designed around
                        <span>real workflows.</span>
                    </h2>


                    <p class="case-gallery-intro scroll-reveal">
                        The interface organizes insurance data and
                        operational processes into structured screens,
                        helping users navigate company, policy, and
                        benefit information more efficiently.
                    </p>

                </div>

            </div>


            <div class="case-gallery-list">


                {{-- =================================================
                     COMPANY MANAGEMENT
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Company Management
                            </h3>

                        </div>


                        <p>
                            Centralized company and client management
                            with structured data tables and direct
                            actions for viewing, editing, and managing
                            company records.
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
                                EB Health / Company Management
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/eb-health/company.webp') }}"
                                alt="EB Health Company Management" loading="lazy">

                        </div>

                    </div>

                </article>


                {{-- =================================================
                     INPATIENT BENEFITS
                ================================================== --}}
                <article class="gallery-project">

                    <div class="gallery-project-meta scroll-reveal">

                        <div>

                            <h3>
                                Inpatient Benefits
                            </h3>

                        </div>


                        <p>
                            Benefit management interface that allows
                            users to select policies, manage inpatient
                            benefits, and organize benefit and premium
                            information within a single workflow.
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
                                EB Health / Inpatient Benefits
                            </div>

                            <div class="browser-menu">
                                •••
                            </div>

                        </div>


                        <div class="gallery-image">

                            <img src="{{ asset('images/projects/eb-health/rawat-inap.webp') }}"
                                alt="EB Health Inpatient Benefit Management" loading="lazy">

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
                    Turning insurance processes
                    <span>into clear workflows.</span>
                </h2>


                <p class="case-large-copy scroll-reveal">
                    Employee Benefit insurance involves interconnected
                    data, multiple operational stages, and different
                    types of benefits. The challenge was building an
                    interface that could present company, policy,
                    benefit, endorsement, and claim information clearly
                    while keeping the frontend synchronized with backend
                    services through REST APIs.
                </p>


                <div class="challenge-grid">


                    {{-- CHALLENGE 01 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Complex Insurance Workflow
                        </h3>

                        <p>
                            Multiple modules and operational stages
                            needed to remain connected while still
                            being easy for users to understand
                            and navigate.
                        </p>

                    </article>


                    {{-- CHALLENGE 02 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Frontend & Backend Integration
                        </h3>

                        <p>
                            The frontend application needed to exchange
                            data reliably with a separate Laravel backend
                            through REST API endpoints.
                        </p>

                    </article>


                    {{-- CHALLENGE 03 --}}
                    <article class="challenge-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            Structured Data Management
                        </h3>

                        <p>
                            Company, policy, participant, benefit,
                            endorsement, and claim data needed to be
                            organized consistently across the application.
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
                    From interface
                    <span>to business logic.</span>
                </h2>


                <div class="role-list">


                    {{-- ROLE 01 --}}
                    <div class="role-item scroll-reveal">

                        <span>01</span>

                        <h3>
                            Frontend Development
                        </h3>

                        <p>
                            Built and refined Laravel Blade interfaces,
                            JavaScript interactions, forms, tables,
                            navigation flows, and responsive application
                            screens.
                        </p>

                    </div>


                    {{-- ROLE 02 --}}
                    <div class="role-item scroll-reveal">

                        <span>02</span>

                        <h3>
                            Backend Development
                        </h3>

                        <p>
                            Developed Laravel controllers, application
                            logic, database queries, validation, and
                            data processing required by Employee
                            Benefit workflows.
                        </p>

                    </div>


                    {{-- ROLE 03 --}}
                    <div class="role-item scroll-reveal">

                        <span>03</span>

                        <h3>
                            REST API Integration
                        </h3>

                        <p>
                            Connected the EB Health frontend with a
                            separate backend application through REST
                            API endpoints for authentication and
                            operational data.
                        </p>

                    </div>


                    {{-- ROLE 04 --}}
                    <div class="role-item scroll-reveal">

                        <span>04</span>

                        <h3>
                            Debugging & Version Control
                        </h3>

                        <p>
                            Troubleshot application issues and managed
                            development changes using Git and Bitbucket
                            as part of the development workflow.
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

                    <h3>Laravel 9</h3>

                    <p>
                        Frontend & backend application framework
                    </p>

                </div>


                {{-- MYSQL --}}
                <div class="case-tech-item scroll-reveal">

                    <span>02</span>

                    <h3>MySQL</h3>

                    <p>
                        Relational database management
                    </p>

                </div>


                {{-- JAVASCRIPT --}}
                <div class="case-tech-item scroll-reveal">

                    <span>03</span>

                    <h3>JavaScript</h3>

                    <p>
                        Client-side interaction and functionality
                    </p>

                </div>


                {{-- REST API --}}
                <div class="case-tech-item scroll-reveal">

                    <span>04</span>

                    <h3>REST API</h3>

                    <p>
                        Frontend and backend communication
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


            <a href="{{ route('projects.askedir') }}" class="next-project-link scroll-reveal">

                <div>

                    <span>02</span>

                    <h2>
                        ASKEDIR
                    </h2>

                </div>


                <span class="next-arrow">
                    ↗
                </span>

            </a>

        </div>

    </section>

@endsection
