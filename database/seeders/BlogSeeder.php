<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Comment choisir un bon conseiller',
            'content' => 'Nouvelle trouvait supplice lupanars revendre me. Crispent éthiopie philippe essaiera.',
            'slug' => 'introduction-a-l-ecommerce',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-3.jpg',
        ]);
        Blog::create([
            'title' => 'Les avantages de l\'e-commerce',
            'content' => 'L\'e-commerce offre de nombreux avantages, notamment la possibilité de vendre des produits en ligne, d\'atteindre un public mondial et de réduire les coûts.',
            'slug' => 'les-avantages-de-l-ecommerce',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-1.jpg',
        ]);
        Blog::create([
            'title' => 'Conseils pour réussir dans l\'e-commerce',
            'content' => 'Pour réussir dans l\'e-commerce, il est important de choisir les bons produits, de créer un site web attrayant et de promouvoir votre boutique en ligne.',
            'slug' => 'conseils-pour-reussir-dans-l-ecommerce',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-2.jpg',
        ]);

        Blog::create([
            'title' => 'Comment choisir un bon conseiller1',
            'content' => 'Nouvelle trouvait supplice lupanars revendre me. Crispent éthiopie philippe essaiera.',
            'slug' => 'introduction-a-l-ecommerce999',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-4.jpg',
        ]);
        Blog::create([
            'title' => 'Les avantages de l\'e-commerce2',
            'content' => 'L\'e-commerce offre de nombreux avantages, notamment la possibilité de vendre des produits en ligne, d\'atteindre un public mondial et de réduire les coûts.',
            'slug' => 'les-avantages-de-l-ecommerce77',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-5.jpg',
        ]);
        Blog::create([
            'title' => 'Conseils pour réussir dans l\'e-commerce3',
            'content' => 'Pour réussir dans l\'e-commerce, il est important de choisir les bons produits, de créer un site web attrayant et de promouvoir votre boutique en ligne.',
            'slug' => 'conseils-pour-reussir-dans-l-ecommerce11',
            'category_id' => 1,
            'user_id' => 1,
            'image' => 'assets/images/resource/news-6.jpg',
        ]);
    }
}
