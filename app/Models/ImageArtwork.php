<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageArtwork extends Model
{
    use HasFactory;

    public function Artwork() {
        return $this->belongsTo(Artwork::class);
    }
}
