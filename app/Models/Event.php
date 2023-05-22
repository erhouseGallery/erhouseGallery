<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'excerpt',
        'date',
        'location',
        'time'
    ];

    use HasFactory;
}
