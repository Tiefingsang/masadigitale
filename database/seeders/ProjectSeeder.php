<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Site Web de Portfolio',
            'slug' => 'tite-web-de-portfolio',
            'description' => 'Création d\'un site web portfolio pour un développeur freelance.',
            'short' => 'Portfolio de développeur',
            'category_id' => 1,
            'technology_id' => 2,
            'client' => 'John Doe',
            'image' => '/assets/img/portfolio/p1.jpg',
            'link' => 'https://www.johndoe.com',
            'date_debut' => '2023-01-15',
            'date_fin' => '2023-03-15',
        ]);

        Project::create([
            'title' => 'Application Mobile E-commerce',
            'slug' => 'application-mobile-e-commerce',
            'description' => 'Développement d\'une application mobile pour une boutique en ligne.',
            'short' => 'App mobile E-commerce',
            'category_id' => 2,
            'technology_id' => 3,
            'client' => 'ShopOnline',
            'image' => '/assets/img/portfolio/p2.jpg',
            'link' => 'https://www.shoponline.com',
            'date_debut' => '2023-04-01',
            'date_fin' => '2023-06-30',
        ]);

        Project::create([
            'title' => 'Site Web de Blog',
            'slug' => 'site-web-de-blog',
            'description' => 'Conception d\'un site web de blog pour un passionné de voyage.',
            'short' => 'Blog de voyage',
            'category_id' => 3,
            'technology_id' => 1,
            'client' => 'Traveler',
            'image' => '/assets/img/portfolio/p3.jpg',
            'link' => 'https://www.traveler.com',
            'date_debut' => '2023-07-15',
            'date_fin' => '2023-09-15',
        ]);
    }
}
