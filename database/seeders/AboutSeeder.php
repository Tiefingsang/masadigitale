<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Masasugu est une entreprise d\'e-commerce basée à Bamako',
            'description' => 'Masasugu est une entreprise d\'e-commerce basée à Bamako, Mali. Nous nous engageons à fournir les meilleurs services et produits à nos clients.',
            'image' => 'https://www.youtube.com/watch?v=Fvae8nxzVz4', 
        ]);
    }
}
