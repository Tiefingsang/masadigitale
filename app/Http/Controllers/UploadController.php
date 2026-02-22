<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Vérifier si un fichier a été uploadé
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            // Valider le fichier
            $request->validate([
                'upload' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            ]);

            // Générer un nom unique
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            // Créer le dossier s'il n'existe pas
            $uploadPath = public_path('uploads/ckeditor');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            // Déplacer le fichier
            $file->move($uploadPath, $filename);

            // Créer l'URL
            $url = asset('uploads/ckeditor/' . $filename);

            // Réponse pour CKEditor
            return response()->json([
                'uploaded' => true,
                'url' => $url
            ]);
        }

        // Si pas de fichier
        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'Aucun fichier reçu. Veuillez sélectionner une image.'
            ]
        ], 400);
    }
}
