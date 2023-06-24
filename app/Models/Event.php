<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageEvent;

class Event extends Model
{
    use HasFactory, Sluggable;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Image()
    {
        return $this->hashMany(ImageEvent::class);
    }


    public function getRouteKeyName()
    {
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
        'location',
        'date_event',
        'time',
        'content',
        'user_id',
    ];


    protected $casts = [
        'date' => 'datetime',
    ];
}
