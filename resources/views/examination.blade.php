@extends('layout')

@section('title', 'Examination - VLSSY Inter College')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Examination</h1>
            <p>Comprehensive examination system ensuring fair evaluation</p>
        </div>
    </section>

    <!-- Examination Content -->
    <section>
        <div style="max-width: 900px; margin: 0 auto;">
            <h2 class="section-title">Examination System</h2>
            <p class="section-subtitle">Transparent and fair evaluation process</p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px;">
                    <h3 style="color: #0066cc; margin-bottom: 1rem;">📅 Examination Schedule</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.5rem;">✓ Unit Tests: Monthly</li>
                        <li style="margin-bottom: 0.5rem;">✓ Mid-term Exams: November & March</li>
                        <li style="margin-bottom: 0.5rem;">✓ Final Exams: May-June</li>
                        <li style="margin-bottom: 0.5rem;">✓ Practical Exams: As per subjects</li>
                    </ul>
                </div>

                <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px;">
                    <h3 style="color: #0066cc; margin-bottom: 1rem;">📊 Grading System</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 0.5rem;">✓ 91-100: A+ (Outstanding)</li>
                        <li style="margin-bottom: 0.5rem;">✓ 81-90: A (Excellent)</li>
                        <li style="margin-bottom: 0.5rem;">✓ 71-80: B+ (Very Good)</li>
                        <li style="margin-bottom: 0.5rem;">✓ 61-70: B (Good)</li>
                        <li style="margin-bottom: 0.5rem;">✓ 51-60: C (Satisfactory)</li>
                        <li style="margin-bottom: 0.5rem;">✓ Below 50: Fail</li>
                    </ul>
                </div>
            </div>

            <div style="background: #e6f0ff; padding: 2rem; border-radius: 10px; margin: 3rem 0;">
                <h3 style="color: #003d7a; margin-bottom: 1rem;">📋 Examination Rules & Regulations</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                    <div>
                        <h4 style="color: #0066cc; margin-bottom: 0.5rem;">Attendance Requirement</h4>
                        <p style="margin: 0; font-size: 0.9rem;">Minimum 75% attendance required to appear for final exams</p>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; margin-bottom: 0.5rem;">Discipline</h4>
                        <p style="margin: 0; font-size: 0.9rem;">Strict discipline maintained during examination hours</p>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; margin-bottom: 0.5rem;">Malpractice</h4>
                        <p style="margin: 0; font-size: 0.9rem;">Zero tolerance policy for any form of malpractice</p>
                    </div>
                    <div>
                        <h4 style="color: #0066cc; margin-bottom: 0.5rem;">Results</h4>
                        <p style="margin: 0; font-size: 0.9rem;">Results declared within 15 days of exam completion</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin: 3rem 0;">
                <h3 style="color: #003d7a; margin-bottom: 1rem;">📈 Our Performance</h3>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; max-width: 600px; margin: 0 auto;">
                    <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <div style="font-size: 2rem; color: #0066cc; font-weight: 700;">95%</div>
                        <p style="margin: 0.5rem 0 0; color: #666; font-size: 0.9rem;">Pass Rate</p>
                    </div>
                    <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <div style="font-size: 2rem; color: #0066cc; font-weight: 700;">85%</div>
                        <p style="margin: 0.5rem 0 0; color: #666; font-size: 0.9rem;">First Division</p>
                    </div>
                    <div style="background: white; padding: 1.5rem; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                        <div style="font-size: 2rem; color: #0066cc; font-weight: 700;">15%</div>
                        <p style="margin: 0.5rem 0 0; color: #666; font-size: 0.9rem;">Distinctions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="background-color: #e6f0ff; text-align: center;">
        <h2 class="section-title">Academic Excellence</h2>
        <p class="section-subtitle">Join us for a proven track record of success</p>
        <a href="{{ route('admission') }}" class="btn-primary" style="display: inline-block;">Apply for Admission</a>
    </section>
@endsection