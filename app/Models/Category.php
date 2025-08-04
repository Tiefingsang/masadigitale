<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;



class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icone',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
