<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), 
            'phone' => '1234567890',
            'address' => '123 Admin St',
            'country' => 'USA',
            'image' => '/assets/img/banner/home-right.png',
            'cv' => 'admin_cv.pdf',
            'profession' => 'Developpeur',
            'date_profession' => now(),
        ]);
    }
}
