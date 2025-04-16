<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'title' => 'Web Development',
            'short' => 'Développement de sites web modernes et responsives.',
            'description' => 'Nous offrons des services de développement web complets incluant la conception,.',
            'image' => '/assets/images/main-slider/image-1.jpg',
        ]);


        Slider::create([
            'title' => 'Web Development',
            'short' => 'Développement de sites web modernes et responsives.',
            'description' => 'Nous offrons des services de développement web complets incluant la conception, le développement.',
            'image' => '/assets/images/main-slider/image-2.jpg',
        ]);

        

    }
}
