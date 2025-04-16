<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'Partenaire A',
            'description' => 'Description du Partenaire A.',
            'site_web' => 'https://www.partenairea.com',
            'image' => '/assets/img/brands/logo1.png',
        ]);

        Partner::create([
            'name' => 'Partenaire B',
            'description' => 'Description du Partenaire B.',
            'site_web' => 'https://www.partenaireb.com',
            'image' => '/assets/img/brands/logo2.png',
        ]);

        Partner::create([
            'name' => 'Partenaire C',
            'description' => 'Description du Partenaire C.',
            'site_web' => 'https://www.partenairec.com',
            'image' => '/assets/img/brands/logo3.png',
        ]);
    }
}
