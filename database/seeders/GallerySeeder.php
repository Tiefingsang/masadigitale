<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gallery::create([
            'image' => 'fa fa-facebook',
            'tile' => 'dhbfhfbdh',
            'description' => 'sdhbfjhbfdfhbgjdfbj',
        ]);
    }
}
