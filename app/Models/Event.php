<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use HasFactory, Sluggable;

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Image() {
        return $this->hashMany(ImageEvent::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = [

        'title',
        'slug',
        'cover',
        'content',
        'user_id',
        'location',
        'date_event',
        'time'
    ];

    protected $casts = [
        'date' => 'datetime',
    ];


}
