@extends('layout')

@section('title', $service->title . ' - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div style="font-size: 4rem; margin-bottom: 1rem;">{{ $service->icon }}</div>
            <h1>{{ $service->title }}</h1>
        </div>
    </section>

    <!-- Service Details -->
    <section>
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="background-color: #e6f0ff; padding: 3rem 2rem; border-radius: 10px; margin-bottom: 3rem;">
                <h2 style="color: #003d7a; margin-bottom: 1rem;">Overview</h2>
                <p style="font-size: 1.1rem; color: #666;">{{ $service->description }}</p>
            </div>

            <h2 style="color: #003d7a; margin-bottom: 1rem;">Why This Service Matters</h2>
            <p style="margin-bottom: 2rem; color: #666;">{{ $service->short_description }}</p>

            <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;">
                <h3 style="color: #003d7a; margin-bottom: 1rem;">Key Benefits</h3>
                <ul style="list-style: none; color: #666;">
                    <li style="margin-bottom: 0.8rem;">✓ Comprehensive curriculum designed by experts</li>
                    <li style="margin-bottom: 0.8rem;">✓ Practical learning with modern facilities</li>
                    <li style="margin-bottom: 0.8rem;">✓ Experienced faculty guidance</li>
                    <li style="margin-bottom: 0.8rem;">✓ Career-oriented education</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Related Courses -->
    <section style="background-color: #f8f9fa;">
        <h2 class="section-title">Related Courses</h2>
        <div class="services-grid" style="margin-top: 2rem;">
            @php
                $relatedServices = \App\Models\Service::where('id', '!=', $service->id)
                    ->limit(3)
                    ->get();
            @endphp
            @forelse($relatedServices as $related)
                <div class="service-card">
                    <div class="service-icon">{{ $related->icon }}</div>
                    <h3>{{ $related->title }}</h3>
                    <p>{{ $related->short_description }}</p>
                    <a href="{{ route('service.detail', $related) }}" style="color: #0066cc; margin-top: 1rem; display: inline-block; font-weight: 600;">Learn More →</a>
                </div>
            @empty
                <p style="grid-column: 1/-1; text-align: center;">No related courses available</p>
            @endforelse
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Ready to Enroll?</h2>
        <p class="section-subtitle">Join this course and take the first step towards your future</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Apply Now</a>
    </section>
@endsection
