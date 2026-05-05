@extends('layout')

@section('title', 'Home - VLSSY Inter College')

@section('content')
    <!-- Premium Banner Section -->
    <section class="premium-banner">
        <div class="banner-overlay"></div>
        <div class="banner-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="banner-content">
            <div class="banner-text">
                <h1 class="banner-title">Veer Lorik Sampati Singh Yadav Inter College</h1>
                <p class="banner-description">
                    Your pathway to success in higher education. Specialized coaching for JEE, NEET, CLAT, and international entrance exams with proven results and expert guidance.
                </p>
                <div class="banner-buttons">
                <a href="{{ route('about') }}" class="btn-banner-primary">
                    <span class="btn-icon">📘</span>
                    About US
                </a>
                <a href="{{ route('contact') }}" class="btn-banner-secondary">
                    <span class="btn-icon">✉️</span>
                    Contact US
                </a>
                </div>
            </div>
            <div class="banner-features">
                <div class="banner-feature">
                    <div class="feature-icon">🎯</div>
                    <h3>Entrance Exam Prep</h3>
                    <p>JEE, NEET, CLAT coaching</p>
                </div>
                <div class="banner-feature">
                    <div class="feature-icon">🏆</div>
                    <h3>Proven Results</h3>
                    <p>Top university admissions</p>
                </div>
                <div class="banner-feature">
                    <div class="feature-icon">👨‍🏫</div>
                    <h3>Expert Mentors</h3>
                    <p>Personalized guidance</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Info Cards Section -->
    <section class="info-cards">
        <div class="cards-container">
            <div class="info-card">
                <div class="card-icon">📚</div>
                <h3>U-DISE CODE</h3>
                <p>09650804603</p>
            </div>
            <div class="info-card">
                <div class="card-icon">🏫</div>
                <h3>SCHOOL CODE</h3>
                <p>1466</p>
            </div>
            <div class="info-card">
                <div class="card-icon">📞</div>
                <h3>Call Us</h3>
                <p>+91 9506898967</p>
            </div>
            <div class="info-card">
                <div class="card-icon">✉️</div>
                <h3>Send Us a Mail</h3>
                <p>info@vlssy.com</p>
            </div>
        </div>
    </section>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Your Gateway to Higher Education Success</h1>
            <p>Expert guidance and comprehensive preparation for JEE, NEET, CLAT, and international entrance exams. Transform your Grade 12 journey into a pathway to top universities and dream careers.</p>
            <div class="hero-buttons">
                <a href="{{ route('contact') }}" class="btn-primary">Start Your Journey</a>
                <a href="{{ route('services') }}" class="btn-secondary">Explore Programs</a>
            </div>
        </div>
    </section>

    <!-- Education Journey Section -->
    <section class="education-journey">
        <div class="journey-container">
            <h2 class="section-title">Complete Educational Journey</h2>
            <p class="section-subtitle">From foundational learning to higher education excellence - comprehensive education for Classes 1 to 12</p>

            <div class="journey-timeline">
                @foreach($educationalPhases as $phase)
                    <div class="journey-phase">
                        <div class="phase-icon">{{ $phase->icon }}</div>
                        <h3>{{ $phase->title }}</h3>
                        <p>{{ $phase->description }}</p>
                        <div class="phase-features">
                            @foreach($phase->features as $feature)
                                <span>{{ $feature }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="services-grid">
        </div>
    </section>

    <!-- Credibility Section -->
    <section class="credibility">
        <h2 class="section-title">Why Choose VLSSY Inter College?</h2>
        
        <div class="credibility-grid">
            <div class="credibility-item">
                <div class="credibility-number counter" data-target="25">0</div>
                <span class="counter-suffix">+</span>
                <h4>Years of Excellence</h4>
            </div>
            <div class="credibility-item">
                <div class="credibility-number counter" data-target="1000">0</div>
                <span class="counter-suffix">+</span>
                <h4>Students Enrolled</h4>
            </div>
            <div class="credibility-item">
                <div class="credibility-number counter" data-target="95">0</div>
                <span class="counter-suffix">%</span>
                <h4>Pass Rate</h4>
            </div>
            <div class="credibility-item">
                <div class="credibility-number counter" data-target="50">0</div>
                <span class="counter-suffix">+</span>
                <h4>Qualified Faculty</h4>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2 class="section-title">Student Testimonials</h2>
        <p class="section-subtitle">Hear from our students about their experience at VLSSY Inter College</p>
        
        <div class="testimonials-container">
            @forelse($testimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="rating">
                        @for($i = 0; $i < $testimonial->rating; $i++)
                            ★
                        @endfor
                    </div>
                    <p class="testimonial-content">"{{ $testimonial->content }}"</p>
                    <p class="testimonial-author">{{ $testimonial->client_name }}</p>
                    <p class="testimonial-company">{{ $testimonial->company }}</p>
                </div>
            @empty
                <p style="grid-column: 1/-1; text-align: center;">Testimonials coming soon...</p>
            @endforelse
        </div>
    </section>

    <!-- Faculty Section -->
    <section>
        <h2 class="section-title">Meet Our Faculty</h2>
        <p class="section-subtitle">Dedicated educators committed to student success</p>
        
        <div class="team-grid">
            @forelse($teamMembers as $member)
                <div class="team-card">
                    @if($member->image)
                        <img src="{{ asset('public/images/' . $member->image) }}" alt="{{ $member->name }}" class="team-image">
                    @else
                        <div class="team-image" style="background: linear-gradient(135deg, #0066cc, #003d7a); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                            {{ substr($member->name, 0, 1) }}
                        </div>
                    @endif
                    <h3>{{ $member->name }}</h3>
                    <p class="team-position">{{ $member->position }}</p>
                    <p class="team-qualification">{{ $member->qualification }}</p>
                    <p style="color: #666; font-size: 0.9rem;">{{ $member->bio }}</p>
                </div>
            @empty
                <p style="grid-column: 1/-1; text-align: center;">Faculty members coming soon...</p>
            @endforelse
        </div>
    </section>

    <!-- Get in Touch Section -->
    <section class="get-in-touch">
        <h2 class="section-title">Get in touch</h2>
        <p class="section-subtitle">Have questions? Send us a mail query and we'll get back to you.</p>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 1rem; border-radius: 8px; margin: 1rem 0;">
                {{ session('success') }}
            </div>
        @endif

        <div class="contact-form-container">
            <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                @csrf
                <!-- First Row: Name, Email -->
                <div class="form-row first-row">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                </div>

                <!-- Second Row: Phone, Subject -->
                <div class="form-row first-row">
                    <div class="form-group">
                        <input type="tel" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" placeholder="Subject" required>
                    </div>
                </div>

                <!-- Third Row: Message + Send Button -->
                <div class="form-row second-row">
                    <div class="form-group message-group">
                        <textarea name="message" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="form-group button-group">
                        <button type="submit" class="btn-primary" style="width: 100%;">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Ready to Start Your Journey?</h2>
        <p class="section-subtitle">Join VLSSY Inter College and unlock your potential</p>
        <a href="{{ route('contact') }}" class="btn-primary" style="display: inline-block;">Apply for Admission Today</a>
    </section>
@endsection
