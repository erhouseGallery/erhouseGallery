<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function User() {
        return $this->belongsTo(User::class);
    }
    public function Category() {
        return $this->belongsTo(Category::class);
    }
    public function Information() {
        return $this->belongsTo(Information::class);
    }


    protected $fillable = [
        'order_name',
        'category_id',
        'description',
        'user_id',
        'image',
        'information_id',
        'note',
    ];
}
