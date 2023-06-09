<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'user_id',

    ];

    public function User() {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable() : array {
        return [
            'slug'=> [
                'source' => 'title'
            ]
            ];
    }


}
