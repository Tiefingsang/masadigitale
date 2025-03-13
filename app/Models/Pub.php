<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pub extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'link',
        'start_date',
        'end_date',
        'is_active',
    ];
}
