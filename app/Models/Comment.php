<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_blog',
        'content',
        'name',
        'subject',
        'email',
        'id_comment',
    ];
}
