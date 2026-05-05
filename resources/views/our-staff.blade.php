@extends('layout')

@section('title', 'Our Staff - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Our Staff</h1>
            <p>Dedicated professionals committed to student success</p>
        </div>
    </section>

    <!-- Staff Content -->
    <section>
        <h2 class="section-title">Administrative & Support Staff</h2>
        <p class="section-subtitle">The backbone of our institution</p>

        <div class="team-grid">
            @forelse($teamMembers as $member)
                <div class="team-card">
                    @if($member->image)
                        <img src="{{ asset('images/' . $member->image) }}" alt="{{ $member->name }}" class="team-image">
                    @else
                        <div class="team-image" style="background: linear-gradient(135deg, #0066cc, #003d7a); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 2rem;">
                            {{ substr($member->name, 0, 1) }}
                        </div>
                    @endif
                    <h3>{{ $member->name }}</h3>
                    <p class="team-position">{{ $member->position }}</p>
                    <p class="team-qualification">{{ $member->qualification }}</p>
                    <p style="color: #666; font-size: 0.9rem;">{{ $member->bio }}</p>
                    @if($member->email)
                        <a href="mailto:{{ $member->email }}" style="color: #0066cc; text-decoration: none; margin-top: 0.5rem; display: inline-block;">Contact</a>
                    @endif
                </div>
            @empty
                <p style="grid-column: 1/-1; text-align: center;">Staff members coming soon...</p>
            @endforelse
        </div>
    </section>

    <!-- Additional Staff Categories -->
    <section style="background-color: #f8f9fa;">
        <h2 class="section-title">Support Services</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem; max-width: 1200px; margin-left: auto; margin-right: auto;">
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">👨‍💼</div>
                <h3 style="color: #003d7a;">Administrative Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Managing day-to-day operations and student affairs</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🧹</div>
                <h3 style="color: #003d7a;">Maintenance Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Keeping our campus clean and well-maintained</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🍽️</div>
                <h3 style="color: #003d7a;">Cafeteria Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Providing nutritious meals and snacks</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🚐</div>
                <h3 style="color: #003d7a;">Transport Staff</h3>
                <p style="color: #666; margin-top: 0.5rem;">Ensuring safe transportation for students</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Join Our Team</h2>
        <p class="section-subtitle">We're always looking for dedicated professionals</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Contact HR</a>
    </section>
@endsection