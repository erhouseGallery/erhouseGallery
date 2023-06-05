<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{



    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',

    ];

    use HasFactory;
}
