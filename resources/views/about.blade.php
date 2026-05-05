@extends('layout')

@section('title', 'About Us - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>About VLSSY Inter College</h1>
            <p>Committed to providing quality education and shaping future leaders</p>
        </div>
    </section>

    <!-- About Content -->
    <section>
        <div style="max-width: 900px; margin: 0 auto;">
            <h2 style="color: #003d7a; font-size: 2rem; margin-bottom: 1rem;">Our Story</h2>
            <p style="font-size: 1.1rem; color: #666; margin-bottom: 1.5rem;">
                Founded in 2001, VLSSY Inter College has been nurturing young minds and providing quality education for over two decades. Our commitment to academic excellence and holistic development has made us a leading educational institution in the region.
            </p>
            <p style="font-size: 1.1rem; color: #666; margin-bottom: 2rem;">
                We believe in creating an environment where students can discover their potential, develop critical thinking skills, and become responsible citizens. Our experienced faculty and modern facilities ensure that every student receives the best possible education.
            </p>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin: 3rem 0;">
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: #0066cc; font-weight: 700;">25+</div>
                    <p style="color: #666; margin-top: 0.5rem;">Years of Educational Excellence</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: #0066cc; font-weight: 700;">1000+</div>
                    <p style="color: #666; margin-top: 0.5rem;">Students Graduated</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 2.5rem; color: #0066cc; font-weight: 700;">50+</div>
                    <p style="color: #666; margin-top: 0.5rem;">Expert Faculty Members</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section style="background-color: #f8f9fa;">
        <h2 class="section-title">Our Core Values</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem; max-width: 1200px; margin-left: auto; margin-right: auto;">
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">�</div>
                <h3 style="color: #003d7a;">Academic Excellence</h3>
                <p style="color: #666; margin-top: 0.5rem;">Commitment to high academic standards and continuous learning</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">🤝</div>
                <h3 style="color: #003d7a;">Student-Centered</h3>
                <p style="color: #666; margin-top: 0.5rem;">Focusing on individual student needs and holistic development</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; text-align: center;">
                <div style="font-size: 3rem; margin-bottom: 1rem;">💡</div>
                <h3 style="color: #003d7a;">Innovation</h3>
                <p style="color: #666; margin-top: 0.5rem;">Embracing modern teaching methods and technology</p>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section>
        <h2 class="section-title">Meet Our Faculty</h2>
        <p class="section-subtitle">Dedicated educators with years of experience</p>
        
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
                <p style="grid-column: 1/-1; text-align: center;">Faculty members coming soon...</p>
            @endforelse
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Join Our Community</h2>
        <p class="section-subtitle">Start your educational journey with VLSSY Inter College</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Apply Now</a>
    </section>
@endsection
