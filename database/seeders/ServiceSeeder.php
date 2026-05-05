<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing services
        Service::query()->delete();

        // Higher Education Preparation Services for Grade 12
        Service::create([
            'title' => 'Engineering & Technology Preparation',
            'slug' => 'engineering-preparation',
            'description' => 'Comprehensive preparation for engineering entrance exams including JEE Main, JEE Advanced, and state-level engineering entrance tests. Focus on Physics, Chemistry, Mathematics with advanced problem-solving techniques and competitive exam strategies.',
            'short_description' => 'JEE preparation with expert faculty and proven success track record',
            'icon' => '⚙️',
            'order' => 1,
        ]);

        Service::create([
            'title' => 'Medical & Healthcare Career Guidance',
            'slug' => 'medical-career-guidance',
            'description' => 'Complete preparation for medical entrance exams like NEET, AIIMS, and other medical college entrance tests. Specialized coaching in Biology, Chemistry, Physics with focus on medical concepts, practical applications, and healthcare career counseling.',
            'short_description' => 'NEET preparation and medical career guidance for aspiring doctors',
            'icon' => '🏥',
            'order' => 2,
        ]);

        Service::create([
            'title' => 'Commerce & Business Studies Excellence',
            'slug' => 'commerce-business-excellence',
            'description' => 'Advanced commerce education preparing students for CA, CS, CMA, B.Com, BBA, and MBA entrance exams. Comprehensive coverage of Accountancy, Business Studies, Economics, and Mathematics with industry-relevant skills.',
            'short_description' => 'Professional commerce education for CA, CS, and business careers',
            'icon' => '💼',
            'order' => 3,
        ]);

        Service::create([
            'title' => 'Law & Legal Studies Preparation',
            'slug' => 'law-legal-studies',
            'description' => 'Comprehensive preparation for law entrance exams including CLAT, AILET, and other law school entrance tests. Focus on legal reasoning, general knowledge, English proficiency, and analytical skills development.',
            'short_description' => 'CLAT and law entrance preparation for future legal professionals',
            'icon' => '⚖️',
            'order' => 4,
        ]);

        Service::create([
            'title' => 'Science Research & Innovation',
            'slug' => 'science-research-innovation',
            'description' => 'Advanced science education for students interested in research, innovation, and scientific careers. Preparation for IISER, NISER, and other research-oriented entrance exams with emphasis on practical research skills.',
            'short_description' => 'Research-oriented science education for scientific innovation',
            'icon' => '🔬',
            'order' => 5,
        ]);

        Service::create([
            'title' => 'International Education Pathways',
            'slug' => 'international-education',
            'description' => 'Guidance and preparation for international education opportunities including SAT, TOEFL, IELTS preparation, and admission counseling for universities abroad. Specialized programs for global career opportunities.',
            'short_description' => 'SAT, TOEFL, IELTS preparation and international university admissions',
            'icon' => '🌍',
            'order' => 6,
        ]);

        Service::create([
            'title' => 'Career Counseling & Mentorship',
            'slug' => 'career-counseling-mentorship',
            'description' => 'Personalized career guidance, aptitude testing, and mentorship programs to help students make informed decisions about their higher education and career paths. One-on-one counseling with industry experts.',
            'short_description' => 'Personalized career guidance and professional mentorship',
            'icon' => '🎯',
            'order' => 7,
        ]);

        Service::create([
            'title' => 'Skill Development & Entrepreneurship',
            'slug' => 'skill-development-entrepreneurship',
            'description' => 'Comprehensive skill development programs including coding, digital marketing, entrepreneurship, and soft skills training. Prepare students for modern careers and entrepreneurial ventures alongside traditional education.',
            'short_description' => 'Modern skills training and entrepreneurship development',
            'icon' => '🚀',
            'order' => 8,
        ]);
    }
}