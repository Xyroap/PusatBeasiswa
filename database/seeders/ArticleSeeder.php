<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Pendidikan di Era Digital',
            'author' => 'Admin',
            'content' => 'Transformasi pendidikan dengan teknologi modern',
            'image' => 'image 6.png',
            'is_featured' => true,
        ]);

        Article::create([
            'title' => 'Tips Mendapatkan Beasiswa',
            'author' => 'Admin',
            'content' => 'Strategi lolos beasiswa luar negeri',
            'image' => 'image 7.png',
            'is_featured' => false,
        ]);
    }
}