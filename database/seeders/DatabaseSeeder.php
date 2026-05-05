<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\TeamMember;
use App\Models\Blog;
use App\Models\Gallery;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Seed Educational Phases
        $this->call(EducationalPhaseSeeder::class);

        // Seed Facilities
        $this->call(FacilitySeeder::class);

        // Seed Services (Higher Education Preparation)
        $this->call(ServiceSeeder::class);

        // Seed Testimonials (now Student Testimonials)
        Testimonial::create([
            'client_name' => 'Rahul Sharma',
            'company' => 'Class of 2024',
            'content' => 'VLSSY Inter College provided me with excellent education and guidance. The faculty\'s dedication and modern teaching methods helped me excel in my board exams and secure admission to a top engineering college.',
            'rating' => 5,
            'is_featured' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Priya Patel',
            'company' => 'Class of 2023',
            'content' => 'The science stream at VLSSY Inter College is outstanding! The laboratory facilities and experienced teachers made learning enjoyable and effective. I achieved 95% in my board exams.',
            'rating' => 5,
            'is_featured' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Amit Kumar',
            'company' => 'Class of 2024',
            'content' => 'Commerce education at VLSSY Inter College prepared me well for my CA entrance. The faculty\'s expertise and practical approach to teaching made complex concepts easy to understand.',
            'rating' => 5,
            'is_featured' => true,
        ]);

        Testimonial::create([
            'client_name' => 'Sneha Gupta',
            'company' => 'Class of 2023',
            'content' => 'VLSSY Inter College focuses on holistic development. Apart from academics, they encourage sports, arts, and community service. It was a transformative experience that shaped my personality.',
            'rating' => 5,
            'is_featured' => true,
        ]);

        // Seed Team Members (now Faculty)
        TeamMember::create([
            'name' => 'Dr. Rajesh Kumar',
            'position' => 'Principal & Mathematics Professor',
            'bio' => 'With 25+ years of teaching experience, Dr. Kumar leads our institution with a vision for academic excellence and student development.',
            'qualification' => 'Ph.D. Mathematics, M.Sc.',
            'email' => 'principal@vlssycollege.edu',
        ]);

        TeamMember::create([
            'name' => 'Ms. Priya Singh',
            'position' => 'Head of Science Department',
            'bio' => 'Ms. Singh specializes in Physics and Chemistry education with innovative teaching methods and laboratory expertise.',
            'qualification' => 'M.Sc. Physics, B.Ed.',
            'email' => 'priya.singh@vlssycollege.edu',
        ]);

        TeamMember::create([
            'name' => 'Mr. Vikram Desai',
            'position' => 'Commerce Faculty',
            'bio' => 'Mr. Desai brings industry experience to the classroom, teaching Accountancy and Business Studies with real-world applications.',
            'qualification' => 'M.Com, MBA Finance',
            'email' => 'vikram.desai@vlssycollege.edu',
        ]);

        TeamMember::create([
            'name' => 'Ms. Anjali Sharma',
            'position' => 'English Literature Teacher',
            'bio' => 'Ms. Sharma inspires students with her passion for literature and develops strong communication and analytical skills.',
            'qualification' => 'M.A. English, B.Ed.',
            'email' => 'anjali.sharma@vlssycollege.edu',
        ]);

        // Seed Blogs
        $this->call(BlogSeeder::class);

        // Seed Gallery
        $this->call(GallerySeeder::class);
    }
}
