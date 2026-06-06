<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workshop;

class WorkshopSeeder extends Seeder
{
    public function run(): void
    {
        Workshop::create([
            'title' => 'UI/UX Design Basic',
            'description' => 'Belajar dasar UI UX untuk pemula',
            'image' => '25802140746_544b03f1d4_b.jpg',
            'speaker' => 'John Doe'
        ]);

        Workshop::create([
            'title' => 'Laravel Mastery',
            'description' => 'Backend development dengan Laravel',
            'image' => 'image 34.png',
            'speaker' => 'Mr Prabowo'
        ]);

        Workshop::create([
            'title' => 'Data Science Intro',
            'description' => 'Pengenalan data science & AI',
            'image' => 'image 43.png',
            'speaker' => 'Mr Gibran'
        ]);
    }
}