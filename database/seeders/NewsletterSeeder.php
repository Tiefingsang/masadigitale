<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Newsletter;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('newsletters')->insert([
            [
                'email' => 'alice.dupont@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'bob.martin@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'claire.petit@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'david.smith@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'emily.johnson@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
