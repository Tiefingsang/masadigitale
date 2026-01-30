<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formation;
use Illuminate\Support\Str;

class FormationSeeder extends Seeder
{
    public function run(): void
    {
        $formations = [
            [
                'titre' => 'Photoshop pour débutants',
                'description_courte' => 'Apprenez les bases essentielles de Photoshop pour créer des visuels professionnels.',
                'description_complete' => 'Cette formation vous permet de maîtriser les outils fondamentaux de Photoshop : retouche photo, création d’affiches, bannières publicitaires et visuels pour les réseaux sociaux.',
                'duree' => 30,
                'niveau' => 'Débutant',
                'mode' => 'Présentiel',
                'prix' => 50000,
                'statut' => 'en cours',
                'date_debut' => now()->subDays(2),
                'date_fin' => now()->addDays(10),
            ],
            [
                'titre' => 'Marketing Digital & Publicité Facebook',
                'description_courte' => 'Développez votre activité grâce au marketing digital et aux Facebook Ads.',
                'description_complete' => 'Formation complète sur le marketing digital : stratégie, publicité Facebook & Instagram, WhatsApp Business, création de campagnes performantes.',
                'duree' => 40,
                'niveau' => 'Intermédiaire',
                'mode' => 'Hybride',
                'prix' => 75000,
                'statut' => 'à venir',
                'date_debut' => now()->addDays(7),
                'date_fin' => now()->addDays(20),
            ],
            [
                'titre' => 'Logiciels de gestion d’entreprise',
                'description_courte' => 'Maîtrisez les logiciels de gestion pour piloter efficacement votre entreprise.',
                'description_complete' => 'Cette formation vous apprend à utiliser des logiciels de gestion commerciale, comptable et administrative adaptés aux PME africaines.',
                'duree' => 35,
                'niveau' => 'Avancé',
                'mode' => 'En ligne',
                'prix' => 90000,
                'statut' => 'à venir',
                'date_debut' => now()->addDays(15),
                'date_fin' => now()->addDays(30),
            ],
        ];

        foreach ($formations as $formation) {
            Formation::create([
                'titre' => $formation['titre'],
                'slug' => Str::slug($formation['titre']),
                'description_courte' => $formation['description_courte'],
                'description_complete' => $formation['description_complete'],
                'duree' => $formation['duree'],
                'niveau' => $formation['niveau'],
                'mode' => $formation['mode'],
                'prix' => $formation['prix'],
                'statut' => $formation['statut'],
                'date_debut' => $formation['date_debut'],
                'date_fin' => $formation['date_fin'],
                'image' => null,
            ]);
        }
    }
}
