<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        // Projets mis en avant
        $projetsFeatured = Projet::featured()
            ->orderBy('ordre_affichage')
            ->limit(3)
            ->get();

        // Projets par statut
        $projetsRealises = Projet::realises()
            ->orderBy('date_fin', 'desc')
            ->paginate(6, ['*'], 'realises_page');

        $projetsEnCours = Projet::enCours()
            ->orderBy('date_debut')
            ->paginate(6, ['*'], 'en_cours_page');

        $projetsAvenir = Projet::avenir()
            ->orderBy('date_debut')
            ->paginate(6, ['*'], 'avenir_page');

        // Compter les projets par catégorie
        $counts = [
            'realises' => Projet::realises()->count(),
            'en_cours' => Projet::enCours()->count(),
            'avenir' => Projet::avenir()->count(),
        ];

        // Technologies utilisées
        $technologies = Projet::whereNotNull('technologies')
            ->get()
            ->flatMap(function ($projet) {
                return $projet->technologies ?? [];
            })
            ->unique()
            ->sort()
            ->values();

        return view('pages.projets.index', compact(
            'projetsFeatured',
            'projetsRealises',
            'projetsEnCours',
            'projetsAvenir',
            'counts',
            'technologies'
        ));
    }

    public function show($slug)
    {
        $projet = Projet::where('slug', $slug)->firstOrFail();

        // Projets similaires
        $projetsSimilaires = Projet::where('categorie', $projet->categorie)
            ->where('id', '!=', $projet->id)
            ->where('statut', 'realises')
            ->orderBy('date_fin', 'desc')
            ->limit(3)
            ->get();

        // Projets suivants/précédents
        $projetPrecedent = Projet::where('id', '<', $projet->id)
            ->orderBy('id', 'desc')
            ->first();

        $projetSuivant = Projet::where('id', '>', $projet->id)
            ->orderBy('id')
            ->first();

        return view('pages.projets.show', compact(
            'projet',
            'projetsSimilaires',
            'projetPrecedent',
            'projetSuivant'
        ));
    }

    public function byCategory($category)
    {
        $projets = Projet::where('categorie', $category)
            ->orderBy('ordre_affichage')
            ->paginate(12);

        $categorie = $this->getCategorieLabel($category);

        return view('projets.category', compact('projets', 'categorie'));
    }

    public function byStatut($statut)
    {
        $projets = Projet::where('statut', $statut)
            ->orderBy('ordre_affichage')
            ->paginate(12);

        $statutLabel = $this->getStatutLabel($statut);

        return view('projets.statut', compact('projets', 'statutLabel'));
    }

    private function getCategorieLabel($slug)
    {
        $categories = [
            'site-web' => 'Sites Web',
            'application-mobile' => 'Applications Mobiles',
            'ecommerce' => 'E-commerce',
            'seo' => 'SEO & Référencement',
            'marketing' => 'Marketing Digital',
            'branding' => 'Branding & Identité',
        ];

        return $categories[$slug] ?? ucfirst(str_replace('-', ' ', $slug));
    }

    private function getStatutLabel($statut)
    {
        $statuts = [
            'realises' => 'Projets Réalisés',
            'en_cours' => 'Projets en Cours',
            'avenir' => 'Projets à Venir',
        ];

        return $statuts[$statut] ?? ucfirst($statut);
    }
}
