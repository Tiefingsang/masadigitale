<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialNetwork::create([
            'name' => 'Facebook',
            'link' => 'https://www.facebook.com',
            'image' => 'fa fa-facebook', 
        ]);

        SocialNetwork::create([
            'name' => 'Twitter',
            'link' => 'https://www.twitter.com',
            'image' => 'fa fa-twitter',
        ]);
    }
}
