<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'description_courte',
        'description_complete',
        'client',
        'date_debut',
        'date_fin',
        'statut',
        'categorie',
        'technologies',
        'budget',
        'image_principale',
        'images',
        'lien_demo',
        'lien_github',
        'meta_titre',
        'meta_description',
        'is_featured',
        'ordre_affichage',
    ];

    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
        'images' => 'array',
        'technologies' => 'array',
        'is_featured' => 'boolean',
        'budget' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($projet) {
            $projet->slug = Str::slug($projet->titre);
        });

        static::updating(function ($projet) {
            $projet->slug = Str::slug($projet->titre);
        });
    }

    // Scopes
    public function scopeRealises($query)
    {
        return $query->where('statut', 'realises');
    }

    public function scopeEnCours($query)
    {
        return $query->where('statut', 'en_cours');
    }

    public function scopeAvenir($query)
    {
        return $query->where('statut', 'avenir');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('date_debut');
    }

    // Accessors
    public function getStatutLabelAttribute()
    {
        $statuts = [
            'realises' => 'Réalisés',
            'en_cours' => 'En cours',
            'avenir' => 'À venir',
        ];

        return $statuts[$this->statut] ?? $this->statut;
    }

    public function getCategorieLabelAttribute()
    {
        $categories = [
            'site-web' => 'Site Web',
            'application-mobile' => 'Application Mobile',
            'ecommerce' => 'E-commerce',
            'seo' => 'SEO',
            'marketing' => 'Marketing Digital',
            'branding' => 'Branding',
        ];

        return $categories[$this->categorie] ?? ucfirst($this->categorie);
    }

    public function getDureeAttribute()
    {
        if ($this->date_debut && $this->date_fin) {
            $months = $this->date_debut->diffInMonths($this->date_fin);
            return $months . ' mois';
        }
        return 'En cours';
    }

    public function getImagePrincipaleUrlAttribute()
    {
        if ($this->image_principale) {
            return asset('storage/' . $this->image_principale);
        }
        return asset('assets/images/projects/default.jpg');
    }

    public function getImagesUrlsAttribute()
    {
        if (!$this->images) {
            return [];
        }

        return collect($this->images)->map(function ($image) {
            return asset('storage/' . $image);
        })->toArray();
    }

    public function getFormattedBudgetAttribute()
    {
        if ($this->budget) {
            return number_format($this->budget, 0, ',', ' ') . ' FCFA';
        }
        return 'Non spécifié';
    }
}
