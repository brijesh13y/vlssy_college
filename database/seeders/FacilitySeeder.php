<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    public function run(): void
    {
        Facility::create([
            'title' => 'Classrooms',
            'icon' => '🏫',
            'description' => 'Spacious, well-ventilated classrooms equipped with modern teaching aids and comfortable seating for 40 students each.',
            'order' => 1,
        ]);

        Facility::create([
            'title' => 'Library',
            'icon' => '📚',
            'description' => 'Well-stocked library with over 10,000 books, journals, and digital resources. Open 8 AM to 6 PM daily.',
            'order' => 2,
        ]);

        Facility::create([
            'title' => 'Science Laboratories',
            'icon' => '🔬',
            'description' => 'Fully equipped physics, chemistry, and biology labs with modern apparatus and safety measures.',
            'order' => 3,
        ]);

        Facility::create([
            'title' => 'Computer Lab',
            'icon' => '💻',
            'description' => '60 high-performance computers with internet access, latest software, and programming tools.',
            'order' => 4,
        ]);

        Facility::create([
            'title' => 'Sports Facilities',
            'icon' => '⚽',
            'description' => 'Basketball court, football ground, volleyball court, and indoor games room for physical education.',
            'order' => 5,
        ]);

        Facility::create([
            'title' => 'Cafeteria',
            'icon' => '🍽️',
            'description' => 'Hygienic cafeteria serving nutritious meals and snacks at affordable prices for students and staff.',
            'order' => 6,
        ]);

        Facility::create([
            'title' => 'Transportation',
            'icon' => '🚐',
            'description' => 'Safe and reliable transportation service covering major routes in the city and surrounding areas.',
            'order' => 7,
        ]);

        Facility::create([
            'title' => 'Medical Room',
            'icon' => '🏥',
            'description' => 'On-campus medical facility with qualified nurse and first-aid equipment for emergency care.',
            'order' => 8,
        ]);
    }
}
