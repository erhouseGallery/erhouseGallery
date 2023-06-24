<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageArticle extends Model
{
    use HasFactory;

    public function Article() {
        return $this->belongsTo(Article::class);
    }

    protected $fillable = [
        'article_id',
        'image'
    ];
}
