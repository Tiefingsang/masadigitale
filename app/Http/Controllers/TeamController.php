<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  /*   public function index()
    {
        // Récupérer tous les membres triés par ordre
        $members = Team::orderBy('order')->orderBy('created_at', 'desc')->get();

        // Pour la vue d'administration
        if (request()->routeIs('admin.*')) {
            return view('admin.pages.team.index', compact('members'));
        }

        // Pour la vue publique
        return view('team.index', compact('members'));
    } */

        public function index()
        {
            // UNIQUEMENT pour l'administration
            $members = Team::orderBy('order')->orderBy('created_at', 'desc')->get();
            return view('admin.pages.team.index', compact('members'));
        }

        /* public function publicIndex()
        {
            // UNIQUEMENT pour le public
            $members = Team::where('is_active', true)
                ->orderBy('order')
                ->orderBy('name')
                ->get();

            return view('pages.team.index', compact('members'));
        }
 */

        public function publicIndex()
        {
            $members = cache()->remember('team.public.members', 60, fn() =>
                Team::where('is_active', true)
                    ->orderBy('order')
                    ->orderBy('name')
                    ->get()
            );

            $categories = cache()->remember('team.public.categories', 60, fn() =>
                Team::where('is_active', true)
                    ->whereNotNull('category')
                    ->select('category')
                    ->distinct()
                    ->get()
                    ->map(function($item) {
                        return (object)[
                            'slug' => $item->category,
                            'name' => ucfirst($item->category)
                        ];
                    })
            );

            // Statistiques (vous pouvez adapter ces valeurs)
            $totalProjects = 50; // À remplacer par votre logique
            $totalExperience = 15; // À remplacer par votre logique

            return view('pages.team.index', compact('members', 'categories', 'totalProjects', 'totalExperience'));
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'order' => 'nullable|integer',
            'category' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'department' => 'nullable|string|max:100',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Préparation des liens sociaux
        $socialLinks = [];
        if ($request->filled('linkedin')) {
            $socialLinks['linkedin'] = $request->linkedin;
        }
        if ($request->filled('twitter')) {
            $socialLinks['twitter'] = $request->twitter;
        }
        if ($request->filled('github')) {
            $socialLinks['github'] = $request->github;
        }
        if ($request->filled('facebook')) {
            $socialLinks['facebook'] = $request->facebook;
        }
        if ($request->filled('instagram')) {
            $socialLinks['instagram'] = $request->instagram;
        }

        // Gestion de l'image
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Créer un nom unique pour l'image
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // Stocker l'image dans le dossier public/images/team
            $imagePath = $request->file('image')->storeAs(
                'team',
                $imageName,
                'public'
            );
        }

        // Création du membre
        $member = Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'image' => $imagePath,
            'order' => $request->order ?? 0,
            'category' => $request->category,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'social_links' => !empty($socialLinks) ? $socialLinks : null,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('team.index')
            ->with('success', 'Membre de l\'équipe ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        // Pour la vue publique d'un membre
        return view('pages.team.show', compact('team'));
    }


    public function showAdmin(Team $team)
    {
        // Pour la vue publique d'un membre
        return view('admin.pages.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.pages.team.edite', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
            'order' => 'nullable|integer',
            'category' => 'nullable|string|max:100',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'department' => 'nullable|string|max:100',
            'linkedin' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'is_active' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Préparation des liens sociaux
        $socialLinks = $team->social_links ?? [];

        if ($request->filled('linkedin')) {
            $socialLinks['linkedin'] = $request->linkedin;
        } else {
            unset($socialLinks['linkedin']);
        }

        if ($request->filled('twitter')) {
            $socialLinks['twitter'] = $request->twitter;
        } else {
            unset($socialLinks['twitter']);
        }

        if ($request->filled('github')) {
            $socialLinks['github'] = $request->github;
        } else {
            unset($socialLinks['github']);
        }

        if ($request->filled('facebook')) {
            $socialLinks['facebook'] = $request->facebook;
        } else {
            unset($socialLinks['facebook']);
        }

        if ($request->filled('instagram')) {
            $socialLinks['instagram'] = $request->instagram;
        } else {
            unset($socialLinks['instagram']);
        }

        // Gestion de l'image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }

            // Créer un nom unique pour la nouvelle image
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();

            // Stocker la nouvelle image
            $imagePath = $request->file('image')->storeAs(
                'team',
                $imageName,
                'public'
            );

            $team->image = $imagePath;
        }

        // Supprimer l'image si demandé
        if ($request->has('delete_image') && $team->image) {
            Storage::disk('public')->delete($team->image);
            $team->image = null;
        }

        // Mise à jour des données
        $team->update([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'order' => $request->order ?? 0,
            'category' => $request->category,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'social_links' => !empty($socialLinks) ? $socialLinks : null,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()->route('admin.team.index')
            ->with('success', 'Membre mis à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        // Supprimer l'image associée
        if ($team->image && Storage::disk('public')->exists($team->image)) {
            Storage::disk('public')->delete($team->image);
        }

        // Supprimer le membre
        $team->delete();

        return redirect()->route('admin.team.index')
            ->with('success', 'Membre supprimé avec succès!');
    }

    /**
     * Afficher la page équipe publique
     */
  /*   public function publicIndex()
    {
        $members = Team::where('is_active', true)
            ->orderBy('order')
            ->orderBy('name')
            ->get()
            ->groupBy('category'); // Grouper par catégorie si besoin

        return view('admin.pages.team.index', compact('members'));
    } */

    /**
     * Mettre à jour l'ordre des membres (pour drag & drop)
     */
    /* public function updateOrder(Request $request)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*' => 'integer|exists:teams,id',
        ]);

        foreach ($request->order as $index => $id) {
            Team::where('id', $id)->update(['order' => $index]);
        }

        return response()->json(['success' => true]);
    } */

    /**
     * Toggle l'état actif/inactif
     */
   /*  public function toggleActive(Team $team)
    {
        $team->update([
            'is_active' => !$team->is_active
        ]);

        $status = $team->is_active ? 'activé' : 'désactivé';
        return redirect()->back()
            ->with('success', "Membre $status avec succès!");
    } */


    /**
 * Mettre à jour l'ordre des membres (pour drag & drop)
 */
public function updateOrder(Request $request)
{
    $request->validate([
        'order' => 'required|array',
        'order.*' => 'integer|exists:teams,id',
    ]);

    foreach ($request->order as $index => $id) {
        Team::where('id', $id)->update(['order' => $index]);
    }

    return response()->json(['success' => true]);
}

/**
 * Toggle l'état actif/inactif
 */
public function toggleActive(Team $team)
{

    $team->update([
        'is_active' => !$team->is_active
    ]);

    $status = $team->is_active ? 'activé' : 'désactivé';
    return redirect()->back()
        ->with('success', "Membre $status avec succès!");
}
}
