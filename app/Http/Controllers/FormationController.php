<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FormationController extends Controller
{
    /* =========================
       FRONT – LISTE DES FORMATIONS
    ========================== */
    public function index()
    {
        $formations = Formation::where('statut', '!=', 'terminée')
            ->orderBy('date_debut', 'asc')
            ->get();

        return view('pages.form.index', compact('formations'));
    }


    public function listFormations()
    {
        $formations = Formation::orderBy('created_at', 'desc')->get();
        return view('admin.pages.form.list_formations', compact('formations'));
    }

    /* =========================
   FRONT – POPUP FORMATION (AJAX)
========================== */
public function popup($slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();

        return response()->json([
            'titre' => $formation->titre,
            'description' => $formation->description_longue,
            'niveau' => $formation->niveau,
            'mode' => $formation->mode,
            'duree' => $formation->duree,
            'prix' => $formation->prix,
            'slug' => $formation->slug,
            'image' => $formation->image,
        ]);
    }



    /* =========================
       FRONT – DÉTAIL FORMATION
    ========================== */
    public function show($slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();
        return view('pages.form.show', compact('formation'));
    }

    /* =========================
       ADMIN – FORMULAIRE AJOUT
    ========================== */
    public function create()
    {
        return view('admin.pages.form.create');
    }

    /* =========================
       ADMIN – ENREGISTREMENT
    ========================== */
    public function store(Request $request)
{
    // Validation avec messages personnalisés
    $request->validate([
        'titre' => 'required|string|max:255',
        'description_courte' => 'required|string',
        'description_complete' => 'required|string',
        'duree' => 'required|integer',
        'niveau' => 'required|in:Débutant,Intermédiaire,Avancé',
        'mode' => 'required|in:Présentiel,En ligne,Hybride',
        'prix' => 'nullable|numeric',
        'statut' => 'required|in:à venir,en cours,terminée',
        'date_debut' => 'nullable|date',
        'date_fin' => 'nullable|date',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ], [
        'titre.required' => 'Le titre est obligatoire.',
        'titre.string' => 'Le titre doit être une chaîne de caractères.',
        'titre.max' => 'Le titre ne doit pas dépasser 255 caractères.',

        'description_courte.required' => 'La description courte est obligatoire.',
        'description_courte.string' => 'La description courte doit être une chaîne de caractères.',

        'description_complete.required' => 'La description complète est obligatoire.',
        'description_complete.string' => 'La description complète doit être une chaîne de caractères.',

        'duree.required' => 'La durée est obligatoire.',
        'duree.integer' => 'La durée doit être un nombre entier.',

        'niveau.required' => 'Le niveau est obligatoire.',
        'niveau.in' => 'Le niveau doit être Débutant, Intermédiaire ou Avancé.',

        'mode.required' => 'Le mode est obligatoire.',
        'mode.in' => 'Le mode doit être Présentiel, En ligne ou Hybride.',

        'prix.numeric' => 'Le prix doit être un nombre.',

        'statut.required' => 'Le statut est obligatoire.',
        'statut.in' => 'Le statut doit être à venir, en cours ou terminée.',

        'date_debut.date' => 'La date de début doit être une date valide.',
        'date_fin.date' => 'La date de fin doit être une date valide.',

        'image.image' => 'Le fichier doit être une image.',
        'image.mimes' => 'Le format de l’image doit être jpg, jpeg, png ou webp.',
        'image.max' => 'La taille de l’image ne doit pas dépasser 2 Mo.',
    ]);

    $data = $request->all();
    $data['slug'] = Str::slug($request->titre);

    // Upload image
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('formations', 'public');
    }

    Formation::create($data);

    return redirect()->route('formations.index')
                     ->with('success', 'Formation ajoutée avec succès');
}

    /* =========================
       ADMIN – FORMULAIRE ÉDITION
    ========================== */
    public function edit($id)
    {
        $formation = Formation::findOrFail($id);
        return view('admin.pages.form.formationedit', compact('formation'));
    }

    /* =========================
       ADMIN – MISE À JOUR
    ========================== */
    public function update(Request $request, $id)
    {
        $formation = Formation::findOrFail($id);

        $request->validate([
            'titre' => 'required|string|max:255',
            'description_courte' => 'required|string',
            'description_complete' => 'required|string',
            'duree' => 'required|integer',
            'niveau' => 'required|in:Débutant,Intermédiaire,Avancé',
            'mode' => 'required|in:Présentiel,En ligne,Hybride',
            'prix' => 'nullable|numeric',
            'statut' => 'required|in:à venir,en cours,terminée',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->titre);

        // Nouvelle image
        if ($request->hasFile('image')) {
            if ($formation->image) {
                Storage::disk('public')->delete($formation->image);
            }
            $data['image'] = $request->file('image')->store('formations', 'public');
        }

        $formation->update($data);

        return redirect()->back()
            ->with('success', 'Formation mise à jour avec succès');
    }

    /* =========================
       ADMIN – SUPPRESSION
    ========================== */
    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);

        if ($formation->image) {
            Storage::disk('public')->delete($formation->image);
        }

        $formation->delete();

        return back()->with('success', 'Formation supprimée avec succès');
    }
}
