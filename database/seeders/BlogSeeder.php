<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        Blog::create([
            'title' => 'Board Exam Preparation Tips for Success',
            'slug' => 'board-exam-preparation-tips',
            'excerpt' => 'Learn proven strategies and tips to excel in your board examinations with effective study techniques.',
            'content' => 'Board examinations are a crucial milestone in every student\'s academic journey. Success requires proper planning, consistent effort, and smart study strategies. This guide covers essential tips for effective exam preparation.',
            'author' => 'Dr. Rajesh Kumar',
            'featured_image' => null,
            'published_at' => now()->subDays(15),
        ]);

        Blog::create([
            'title' => 'Importance of Laboratory Work in Science Education',
            'slug' => 'importance-laboratory-work-science',
            'excerpt' => 'Discover how hands-on laboratory experiments enhance understanding and develop scientific temperament in students.',
            'content' => 'Laboratory work is an integral part of science education. It transforms theoretical knowledge into practical understanding through experimentation. Our state-of-the-art laboratories at VLSSY Inter College provide students with ample opportunities to conduct experiments and develop scientific skills.',
            'author' => 'Ms. Priya Singh',
            'featured_image' => null,
            'published_at' => now()->subDays(10),
        ]);

        Blog::create([
            'title' => 'Career Guidance: Choosing the Right Stream',
            'slug' => 'career-guidance-choosing-right-stream',
            'excerpt' => 'Get expert guidance on selecting the appropriate stream - Science, Commerce, or Arts based on your interests and goals.',
            'content' => 'Choosing the right stream is one of the most important decisions in your educational career. This choice shapes your academic path and career opportunities. Science stream is ideal for those interested in medicine, engineering, or research. Commerce stream suits students inclined towards business and finance. Arts stream is perfect for those passionate about humanities, social sciences, and liberal arts.',
            'author' => 'Mr. Vikram Desai',
            'featured_image' => null,
            'published_at' => now()->subDays(8),
        ]);

        Blog::create([
            'title' => 'Developing Soft Skills: Beyond Academics',
            'slug' => 'developing-soft-skills-beyond-academics',
            'excerpt' => 'Explore how VLSSY Inter College helps students develop essential soft skills like communication, leadership, and teamwork.',
            'content' => 'While academic excellence is important, soft skills are equally crucial for success in today\'s competitive world. At VLSSY Inter College, we focus on holistic development through various co-curricular activities, debate competitions, group projects, and leadership programs. These activities help students develop communication skills, confidence, teamwork abilities, and problem-solving capabilities.',
            'author' => 'Ms. Anjali Sharma',
            'featured_image' => null,
            'published_at' => now()->subDays(5),
        ]);

        Blog::create([
            'title' => 'Sports and Physical Education: A Vital Component',
            'slug' => 'sports-physical-education-vital-component',
            'excerpt' => 'Learn why physical fitness and sports activities are essential for overall student development and well-being.',
            'content' => 'A healthy mind resides in a healthy body. Sports and physical education are vital components of our educational philosophy. We encourage students to participate in various sports activities including cricket, volleyball, badminton, athletics, and more. These activities not only build physical fitness but also develop discipline, teamwork, and sportsmanship.',
            'author' => 'Dr. Rajesh Kumar',
            'featured_image' => null,
            'published_at' => now()->subDays(3),
        ]);

        Blog::create([
            'title' => 'Technology in Education: Embracing Digital Learning',
            'slug' => 'technology-education-digital-learning',
            'excerpt' => 'Understand how digital tools and technology are revolutionizing education and enhancing the learning experience.',
            'content' => 'The educational landscape is rapidly changing with the integration of technology. At VLSSY Inter College, we embrace digital learning through interactive online platforms, computer labs, and digital classrooms. Our students have access to online learning resources, educational software, and virtual laboratory simulations that enhance their understanding and prepare them for the digital world.',
            'author' => 'Ms. Priya Singh',
            'featured_image' => null,
            'published_at' => now()->subDays(1),
        ]);
    }
}
