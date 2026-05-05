<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationalPhase;

class EducationalPhaseSeeder extends Seeder
{
    public function run(): void
    {
        EducationalPhase::create([
            'title' => 'Primary Education (Classes 1-5)',
            'icon' => '🌱',
            'description' => 'Building strong foundations with interactive learning, play-based education, and holistic development. Focus on basic literacy, numeracy, and social skills development.',
            'features' => ['📚 Interactive Learning', '🎨 Creative Activities', '⚽ Sports & Games'],
            'order' => 1,
        ]);

        EducationalPhase::create([
            'title' => 'Middle School (Classes 6-8)',
            'icon' => '📖',
            'description' => 'Transition to advanced learning with comprehensive curriculum covering all subjects. Development of critical thinking, problem-solving, and study skills.',
            'features' => ['🔬 Science Labs', '💻 Computer Education', '🎭 Cultural Activities'],
            'order' => 2,
        ]);

        EducationalPhase::create([
            'title' => 'Secondary Education (Classes 9-10)',
            'icon' => '🎓',
            'description' => 'Board examination preparation with CBSE curriculum. Focus on academic excellence, competitive exam foundation, and career guidance for stream selection.',
            'features' => ['📊 Board Exam Prep', '🔍 Career Counseling', '📈 Performance Tracking'],
            'order' => 3,
        ]);

        EducationalPhase::create([
            'title' => 'Senior Secondary (Classes 11-12)',
            'icon' => '🚀',
            'description' => 'Specialized streams in Science, Commerce, and Arts with intensive preparation for higher education entrance exams. Pathway to universities and professional careers.',
            'features' => ['🎯 Entrance Coaching', '🏆 Competitive Exams', '🌍 Global Opportunities'],
            'order' => 4,
        ]);
    }
}
