<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'short',
        'category_id',
        'technology_id',
        'client',
        'image',
        'link',
        'date_debut',
        'date_fin',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    protected static function booted()
    {
        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }

    public function technologies()
{
    return $this->belongsToMany(Technology::class, 'project_technology', 'project_id', 'technology_id');
}
}
