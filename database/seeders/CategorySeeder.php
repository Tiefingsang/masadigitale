<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'E-commerce',
            'description' => 'Articles et conseils sur le commerce électronique.',
            'icone' => '/favicon.ico', 
        ]);
        Category::create([
            'name' => 'Développement web',
            'description' => 'Articles et conseils sur le développement web.',
            'icone' => '/favicon.ico',
        ]);
        Category::create([
            'name' => 'Technologie',
            'description' => 'Articles et conseils sur la technologie.',
            'icone' => '/favicon.ico',
        ]);
    }
}
