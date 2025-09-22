<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');

            // Nom unique
            $filename = time().'_'.$file->getClientOriginalName();

            // Enregistre dans public/uploads/ckeditor
            $file->move(public_path('uploads/ckeditor'), $filename);

            // URL accessible
            $url = asset('uploads/ckeditor/'.$filename);

            // ⚡ Réponse attendue par CKEditor 5
            return response()->json([
                'url' => $url
            ]);
        }

        return response()->json([
            'error' => ['message' => 'Aucun fichier reçu']
        ], 400);
    }
}
