<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Formation;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::with('formation')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.form.index', compact('inscriptions'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|digits_between:8,15',
            'pays' => 'nullable|string|max:100',
            'ville' => 'nullable|string|max:100',
            'quartier' => 'nullable|string|max:100',
            'dernier_diplome' => 'nullable|string|max:255',
            'sexe' => 'nullable|in:Masculin,Féminin',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 255 caractères.',

            'email.required' => 'L’email est obligatoire.',
            'email.email' => 'L’email doit être une adresse valide.',
            'email.max' => 'L’email ne doit pas dépasser 255 caractères.',

            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'telephone.digits_between' => 'Le numéro de téléphone doit contenir uniquement des chiffres (8 à 15 chiffres).',

            'pays.string' => 'Le pays doit être une chaîne de caractères.',
            'pays.max' => 'Le nom du pays ne doit pas dépasser 100 caractères.',

            'ville.string' => 'La ville doit être une chaîne de caractères.',
            'ville.max' => 'Le nom de la ville ne doit pas dépasser 100 caractères.',

            'quartier.string' => 'Le quartier doit être une chaîne de caractères.',
            'quartier.max' => 'Le nom du quartier ne doit pas dépasser 100 caractères.',

            'dernier_diplome.string' => 'Le dernier diplôme doit être une chaîne de caractères.',
            'dernier_diplome.max' => 'Le dernier diplôme ne doit pas dépasser 255 caractères.',

            'sexe.in' => 'Le sexe doit être Masculin ou Féminin.',
        ]);


        $validated['formation_id'] = $formation->id;

        Inscription::create($validated);
        return redirect()->route('inscriptions.show', $slug)
                         ->with('success', 'Votre inscription a été enregistrée avec succès !');
    }
    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $formation = Formation::where('slug', $slug)->firstOrFail();
        return view('pages.inscriptions.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inscription = Inscription::findOrFail($id);
        $inscription->delete();

        return redirect()->route('admin.formations.index')
                         ->with('success', 'Inscription supprimée avec succès.');
    }
}
