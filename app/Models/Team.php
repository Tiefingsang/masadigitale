<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'position',
        'bio',
        'image',
        'order',
        'is_active',
        'social_links',
        'category',
        'email',
        'phone',
        'department'
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean'
    ];

    // Pour trier par ordre par défaut
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('name');
    }

    // Pour n'afficher que les membres actifs
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
