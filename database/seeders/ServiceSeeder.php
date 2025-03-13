<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Web Development',
            'short' => 'Développement de sites web modernes et responsives.',
            'description' => 'Nous offrons des services de développement web complets incluant la conception, le développement et la maintenance des sites web avec les technologies les plus récentes.',
            'image' => '/assets/img/services/s1.png',
            'icone' => '/favicon.ico',
            'created_at' => now(),
            'updated_at' => now(),
            
        ]);

        Service::create([
            'title' => 'SEO Optimization',
            'short' => 'Optimisation SEO pour améliorer le classement de votre site.',
            'description' => 'Nous proposons des services de référencement naturel pour augmenter la visibilité de votre site dans les moteurs de recherche et attirer plus de clients.',
            'image' => '/assets/img/services/s2.png',
            'icone' => '/favicon.ico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Service::create([
            'title' => 'Mobile App Development',
            'short' => 'Développement d\'applications mobiles sur mesure.',
            'description' => 'Développez une application mobile sur mesure pour iOS et Android afin de répondre aux besoins spécifiques de votre entreprise.',
            'image' => '/assets/img/services/s3.png',
            'icone' => '/favicon.ico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Service::create([
            'title' => 'Graphic Design',
            'short' => 'Conception graphique pour vos besoins en branding.',
            'description' => 'Notre équipe de designers graphiques peut vous aider à créer des logos, des brochures, des cartes de visite et d\'autres supports visuels pour renforcer votre image de marque.',
            'image' => '/assets/img/services/s4.png',
            'icone' => '/favicon.ico',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
