<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;


class Pub extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'link',
        'start_date',
        'end_date',
        'is_active',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
