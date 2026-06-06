<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Scholarship;

class ScholarshipSeeder extends Seeder
{
    public function run(): void
    {
        Scholarship::create([
            'title' => 'Beasiswa LPDP',
            'provider' => 'Kemenkeu RI',
            'description' => 'Beasiswa S2/S3 dalam dan luar negeri',
            'image' => 'Beasiswa-LPDP.png',
            'deadline' => '2026-12-31',
        ]);

        Scholarship::create([
            'title' => 'Beasiswa Unggulan',
            'provider' => 'Kemendikbud',
            'description' => 'Beasiswa prestasi akademik',
            'image' => 'beasiswa1.jpeg',
            'deadline' => '2026-10-30',
        ]);

        Scholarship::create([
            'title' => 'BINUS Scholarship',
            'provider' => 'BINUS University',
            'description' => 'Program Binus fully funded',
            'image' => 'image 19.png',
            'deadline' => '2026-09-15',
        ]);
    }
}