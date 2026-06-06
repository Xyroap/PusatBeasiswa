<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ScholarshipSeeder;
use Database\Seeders\WorkshopSeeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        ScholarshipSeeder::class,
        WorkshopSeeder::class,
        ArticleSeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User Test',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}
