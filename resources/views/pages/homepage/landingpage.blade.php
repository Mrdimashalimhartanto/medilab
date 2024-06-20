@extends('layouts.front')

@section('title', 'Home')

@section('content')

    <main class="main">

        {{-- Start Hero Section --}}
        @include('components.dashboard.hero-dashboard')
        {{-- End Hero Section --}}

        <!-- About Section -->
        @include('components.dashboard.about-dashboard')
        <!-- /About Section -->

        <!-- Stats Section -->
        @include('components.dashboard.stats-dashboard')
        <!-- /Stats Section -->

        <!-- Services Section -->
        @include('components.dashboard.service-dashboard')
        <!-- /Services Section -->

        <!-- Appointment Section -->
        @include('components.dashboard.appointment-dashboard')
        <!-- /Appointment Section -->

        <!-- Departments Section -->
        @include('components.dashboard.department-dashboard')
        <!-- /Departments Section -->

        <!-- Doctors Section -->
        @include('components.dashboard.doctor-dashboard')
        <!-- /Doctors Section -->

        <!-- Faq Section -->
        @include('components.dashboard.faq-dashboard')
        <!-- /Faq Section -->

        <!-- Testimonials Section -->
        @include('components.dashboard.testimoni-dashboard')
        <!-- /Testimonials Section -->

        <!-- Gallery Section -->
        @include('components.dashboard.gallery-dashboard')
        <!-- /Gallery Section -->

        <!-- Contact Section -->
        @include('components.dashboard.contact-dashboard')
        <!-- /Contact Section -->

        @include('components.dashboard.footer-dashboard')

    </main>
@endsection
