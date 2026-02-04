<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $fillable = [
        'nom',
        'quartier',
        'telephone',
        'sexe',
        'ordinateur',
        'niveau_etude',
        'metier',
    ];
}
