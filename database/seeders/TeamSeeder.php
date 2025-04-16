<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'joe',
            'firstname' => 'doe',
            'image'=>'fa fa-facebook',
            'phone' => '44545456488',
            'city' => ' bko',
            'county' => 'ml',
        ]);
    }
}
