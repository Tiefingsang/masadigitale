<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SocialNetwork extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',
        'image',
    ];
}
