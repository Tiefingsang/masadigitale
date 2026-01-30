<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'titre',
        'slug',
        'description_courte',
        'description_complete',
        'duree',
        'niveau',
        'mode',
        'prix',
        'statut',
        'date_debut',
        'date_fin',
        'image'
    ];
}
