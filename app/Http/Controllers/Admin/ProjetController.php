<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjetController extends Controller
{
    // Liste des projets
    public function index(Request $request)
    {
        $query = Projet::query();

        // Filtre par statut
        if ($request->has('statut')) {
            $query->where('statut', $request->statut);
        }

        // Filtre par catégorie
        if ($request->has('categorie')) {
            $query->where('categorie', $request->categorie);
        }

        $projets = $query->orderBy('ordre_affichage')->paginate(10);

        return view('admin.pages.projets.index', compact('projets'));
    }

    // Formulaire de création
    public function create()
    {
        $categories = [
            'site-web' => 'Site Web',
            'application-mobile' => 'Application Mobile',
            'ecommerce' => 'E-commerce',
            'seo' => 'SEO',
            'marketing' => 'Marketing Digital',
            'branding' => 'Branding',
        ];

        $statuts = [
            'realises' => 'Réalisés',
            'en_cours' => 'En cours',
            'avenir' => 'À venir',
        ];

        $technologies = [
            'PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Node.js',
            'Python', 'Django', 'HTML5', 'CSS3', 'Bootstrap', 'Tailwind CSS',
            'MySQL', 'PostgreSQL', 'MongoDB', 'Git', 'Docker', 'AWS',
            'WordPress', 'WooCommerce', 'Shopify', 'PrestaShop'
        ];

        return view('admin.pages.projets.create', compact('categories', 'statuts', 'technologies'));
    }

    // Enregistrement d'un nouveau projet
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string|max:255',
            'description_complete' => 'required|string',
            'client' => 'nullable|string|max:255',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'statut' => 'required|in:realises,en_cours,avenir',
            'categorie' => 'nullable|string|max:255',
            'technologies' => 'nullable|array',
            'budget' => 'nullable|numeric|min:0',
            'image_principale' => 'required|image',
            'images.*' => 'nullable|image',
            'lien_demo' => 'nullable|url',
            'lien_github' => 'nullable|url',
            'meta_titre' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_featured' => 'boolean',
            'ordre_affichage' => 'nullable|integer',
        ]);

        // Gestion de l'image principale
        if ($request->hasFile('image_principale')) {
            $validated['image_principale'] = $request->file('image_principale')->store('projets', 'public');
        }

        // Gestion des images multiples
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('projets/gallery', 'public');
            }
            $validated['images'] = $images;
        }

        // Formatage des technologies
        if ($request->has('technologies')) {
            $validated['technologies'] = $request->technologies;
        }

        $validated['is_featured'] = $request->has('is_featured');

        Projet::create($validated);

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet créé avec succès.');
    }

    // Affichage d'un projet
    public function show(Projet $projet)
    {
        return view('admin.pages.projets.show', compact('projet'));
    }

    // Formulaire d'édition
    public function edit(Projet $projet)
    {
        $categories = [
            'site-web' => 'Site Web',
            'application-mobile' => 'Application Mobile',
            'ecommerce' => 'E-commerce',
            'seo' => 'SEO',
            'marketing' => 'Marketing Digital',
            'branding' => 'Branding',
        ];

        $statuts = [
            'realises' => 'Réalisés',
            'en_cours' => 'En cours',
            'avenir' => 'À venir',
        ];

        $technologies = [
            'PHP', 'Laravel', 'JavaScript', 'Vue.js', 'React', 'Node.js',
            'Python', 'Django', 'HTML5', 'CSS3', 'Bootstrap', 'Tailwind CSS',
            'MySQL', 'PostgreSQL', 'MongoDB', 'Git', 'Docker', 'AWS',
            'WordPress', 'WooCommerce', 'Shopify', 'PrestaShop'
        ];

        return view('admin.pages.projets.edite', compact('projet', 'categories', 'statuts', 'technologies'));
    }

    // Mise à jour d'un projet
    public function update(Request $request, Projet $projet)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string|max:255',
            'description_complete' => 'required|string',
            'client' => 'nullable|string|max:255',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'statut' => 'required|in:realises,en_cours,avenir',
            'categorie' => 'nullable|string|max:255',
            'technologies' => 'nullable|array',
            'budget' => 'nullable|numeric|min:0',
            'image_principale' => 'nullable|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
            'lien_demo' => 'nullable|url',
            'lien_github' => 'nullable|url',
            'meta_titre' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_featured' => 'boolean',
            'ordre_affichage' => 'nullable|integer',
        ]);

        // Gestion de l'image principale
        if ($request->hasFile('image_principale')) {
            // Supprimer l'ancienne image si elle existe
            if ($projet->image_principale) {
                Storage::disk('public')->delete($projet->image_principale);
            }
            $validated['image_principale'] = $request->file('image_principale')->store('projets', 'public');
        }

        // Gestion des images multiples
        if ($request->hasFile('images')) {
            // Supprimer les anciennes images
            if ($projet->images) {
                foreach ($projet->images as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }

            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('projets/gallery', 'public');
            }
            $validated['images'] = $images;
        }

        // Formatage des technologies
        if ($request->has('technologies')) {
            $validated['technologies'] = $request->technologies;
        }

        $validated['is_featured'] = $request->has('is_featured');

        $projet->update($validated);

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet mis à jour avec succès.');
    }

    // Suppression d'un projet
    public function destroy(Projet $projet)
    {
        // Supprimer les images
        if ($projet->image_principale) {
            Storage::disk('public')->delete($projet->image_principale);
        }

        if ($projet->images) {
            foreach ($projet->images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $projet->delete();

        return redirect()->route('admin.projets.index')
            ->with('success', 'Projet supprimé avec succès.');
    }

    // Mise à jour de l'ordre
    public function updateOrder(Request $request)
    {
        foreach ($request->order as $order) {
            Projet::where('id', $order['id'])->update(['ordre_affichage' => $order['position']]);
        }

        return response()->json(['success' => true]);
    }

    // Toggle featured
    public function toggleFeatured(Projet $projet)
    {
        $projet->update(['is_featured' => !$projet->is_featured]);

        return back()->with('success', 'Statut "Mis en avant" modifié.');
    }
}
