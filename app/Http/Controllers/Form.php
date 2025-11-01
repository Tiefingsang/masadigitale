<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\form as FormModel;

class Form extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'ordinateur' => 'required|string',
            'niveau_etude' => 'required|string',
            'metier' => 'required|string|max:255',
        ], [
            'nom.required' => 'Le champ nom est obligatoire.',
            'quartier.required' => 'Le champ quartier est obligatoire.',
            'telephone.required' => 'Le champ téléphone est obligatoire.',
            'ordinateur.required' => 'Veuillez indiquer si vous avez un ordinateur.',
            'niveau_etude.required' => 'Veuillez sélectionner votre niveau d’étude.',
            'metier.required' => 'Le champ métier est obligatoire.',
        ]);

        \App\Models\form::create($request->all());

        return back()->with('success', '✅ Votre inscription a été enregistrée avec succès !');
    }


    //recupérer les inscriptions
    public function index(){
        //$inscriptions = Inscription::all();
        return view('pages.form.index',);
    }
}
