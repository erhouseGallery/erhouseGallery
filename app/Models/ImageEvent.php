<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageEvent extends Model
{
    use HasFactory;

    public function Event() {

        return $this->belongsTo(Event::class);
    }

    protected $fillable = [
        'event_id',
        'image'
    ];
}
