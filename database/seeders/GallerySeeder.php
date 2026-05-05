<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        Gallery::create([
            'title' => 'Modern Science Classroom',
            'description' => 'State-of-the-art science classroom equipped with interactive boards and modern teaching aids.',
            'image' => 'classroom1.jpg',
            'category' => 'Classroom',
            'order' => 1,
        ]);

        Gallery::create([
            'title' => 'Advanced Physics Laboratory',
            'description' => 'Well-equipped physics lab with modern apparatus for experiments and practical learning.',
            'image' => 'laboratory1.jpg',
            'category' => 'Laboratory',
            'order' => 2,
        ]);

        Gallery::create([
            'title' => 'Chemistry Lab Setup',
            'description' => 'Complete chemistry laboratory with fume hoods, safety equipment, and chemical apparatus.',
            'image' => 'laboratory2.jpg',
            'category' => 'Laboratory',
            'order' => 3,
        ]);

        Gallery::create([
            'title' => 'Central Library',
            'description' => 'Spacious library with extensive collection of books, journals, and digital resources.',
            'image' => 'library1.jpg',
            'category' => 'Library',
            'order' => 4,
        ]);

        Gallery::create([
            'title' => 'Computer Lab',
            'description' => 'High-spec computer laboratory with modern systems for coding and digital learning.',
            'image' => 'classroom2.jpg',
            'category' => 'Classroom',
            'order' => 5,
        ]);

        Gallery::create([
            'title' => 'Sports Ground',
            'description' => 'Spacious sports ground for cricket, volleyball, and athletics activities.',
            'image' => 'infrastructure1.jpg',
            'category' => 'Sports',
            'order' => 6,
        ]);

        Gallery::create([
            'title' => 'Annual Sports Day',
            'description' => 'Exciting moments from the annual sports day celebration with various athletic events.',
            'image' => 'event1.jpg',
            'category' => 'Event',
            'order' => 7,
        ]);

        Gallery::create([
            'title' => 'Science Exhibition',
            'description' => 'Student-led science exhibition showcasing innovative projects and experiments.',
            'image' => 'event2.jpg',
            'category' => 'Event',
            'order' => 8,
        ]);

        Gallery::create([
            'title' => 'School Auditorium',
            'description' => 'Modern auditorium with excellent acoustics for seminars, plays, and cultural programs.',
            'image' => 'infrastructure2.jpg',
            'category' => 'Infrastructure',
            'order' => 9,
        ]);

        Gallery::create([
            'title' => 'Cafeteria',
            'description' => 'Clean and hygienic cafeteria serving nutritious meals and beverages.',
            'image' => 'classroom3.jpg',
            'category' => 'Infrastructure',
            'order' => 10,
        ]);

        Gallery::create([
            'title' => 'Annual Function',
            'description' => 'Grand annual function celebrating student achievements and performances.',
            'image' => 'event3.jpg',
            'category' => 'Event',
            'order' => 11,
        ]);

        Gallery::create([
            'title' => 'Outdoor Class Session',
            'description' => 'Students engaged in outdoor learning activities under the guidance of faculty.',
            'image' => 'classroom4.jpg',
            'category' => 'Classroom',
            'order' => 12,
        ]);
    }
}
