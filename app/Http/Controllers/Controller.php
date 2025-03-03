<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Support\Facades\Storage;

abstract class Controller
{
    //

    

public function uploadAndOptimize(Request $request)
{
    $request->validate([
        'image' => 'required|image|max:2048', // Limite à 2 Mo
    ]);

    $image = $request->file('image');
    $path = $image->store('images', 'public'); // Stocker l'image dans storage/app/public/images

    // Optimiser l'image
    $optimizerChain = OptimizerChainFactory::create();
    $optimizerChain->optimize(storage_path("app/public/{$path}"));

    return response()->json(['message' => 'Image téléchargée et optimisée avec succès !', 'path' => $path]);
}

}
