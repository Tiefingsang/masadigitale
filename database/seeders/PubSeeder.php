<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pub::create([
            'title' => 'Promo de Fin d\'Année',
            'description' => 'Profitez de nos offres exceptionnelles pour la fin d\'année !',
            'image' => '/assets/img/portfolio/p1.jpg',
            'link' => 'https://www.example.com/promo',
            'start_date' => now(),
            'end_date' => now()->addDays(30),
            'is_active' => true,
        ]);

        Pub::create([
            'title' => 'Nouveau Produit',
            'description' => 'Découvrez notre dernier produit révolutionnaire.',
            'image' => '/assets/img/portfolio/p2.jpg',
            'link' => 'https://www.example.com/nouveau-produit',
            'start_date' => now(),
            'end_date' => now()->addDays(15),
            'is_active' => true,
        ]);

        Pub::create([
            'title' => 'Événement Spécial',
            'description' => 'Rejoignez-nous pour un événement spécial le mois prochain.',
            'image' => '/assets/img/portfolio/p3.jpg',
            'link' => 'https://www.example.com/evenement',
            'start_date' => now(),
            'end_date' => now()->addDays(7),
            'is_active' => true,
        ]);
    }
}
