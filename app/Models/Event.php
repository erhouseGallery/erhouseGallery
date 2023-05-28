<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'excerpt',
        'date',
        'location',
        'time'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    use HasFactory, Sluggable;
}
