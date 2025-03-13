<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'name' => 'Client A',
                'email' => 'clientA@example.com',
                'telephone' => '1234567890',
                'address' => '123 Rue A, Ville, Pays',
                'image' => '/assets/img/blog/c5.jpg',
                'description' => 'Description du Client A',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ]);
    }
}
