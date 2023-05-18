<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;


    public function Kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function Status() {
        return $this->belongsTo(Status::class);
    }
    public function User() {
        return $this->belongsTo(User::class);
    }
}
