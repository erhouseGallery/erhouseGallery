<?php

namespace App\Models;
use App\Models\Artwork;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageArtwork extends Model
{
    use HasFactory;


    protected $fillable = [
        'artwork_id',
        'image'
    ];

    public function Artwork()
    {
        return $this->belongsTo(Artwork::class);
    }
}
