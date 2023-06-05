<?php

namespace App\Models;

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
        'image',
        'material',
        'size',
        'year',
        'description',
        'status_id',
        'user_id',
    ];


    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public function Status() {
        return $this->belongsTo(Status::class);
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


}
