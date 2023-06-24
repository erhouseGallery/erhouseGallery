<?php

namespace App\Models;

use App\Models\ImageArtwork;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;


class Artwork extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'cover',
        'material',
        'size',
        'year',
        'description',
        'status_id',
        'user_id',
        'price'
    ];


    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('title', 'like', '%' . request('search') . '%');
        }
    }


    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Status()
    {
        return $this->belongsTo(Status::class);
    }


    public function Image()
    {
        return $this->hasMany(ImageArtwork::class);
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
}
