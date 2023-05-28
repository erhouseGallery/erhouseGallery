<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    public function Category() {
        return $this->belongsTo(Category::class);
    }

    public function Status() {
        return $this->belongsTo(Status::class);
    }

    protected $fillable = [
        'title',
        'category_id',
        // 'image',
        'material',
        'size',
        'year',
        'description',
        'status_id',
        'user_id',
    ];
}
