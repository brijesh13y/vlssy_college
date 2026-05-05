@extends('layout')

@section('title', 'Courses - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Our Courses</h1>
            <p>Comprehensive educational programs designed to prepare you for success</p>
        </div>
    </section>

    <!-- Services Section -->
    <section>
        <h2 class="section-title">What We Offer</h2>
        <p class="section-subtitle">Quality education across multiple disciplines</p>
        
        <div class="services-grid">
            @forelse($services as $service)
                <div class="service-card" onclick="window.location='{{ route('service.detail', $service) }}'">
                    <div class="service-icon">{{ $service->icon }}</div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->short_description }}</p>
                    <a href="{{ route('service.detail', $service) }}" style="color: #0066cc; margin-top: 1rem; display: inline-block; font-weight: 600;">Learn More →</a>
                </div>
            @empty
                <p style="grid-column: 1/-1; text-align: center;">Courses coming soon...</p>
            @endforelse
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Ready to Enroll?</h2>
        <p class="section-subtitle">Contact us to learn more about our courses and admission process</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Contact Us</a>
    </section>
@endsection
