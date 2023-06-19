<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'image'
    ];

    public function Order() {
        return $this->belongsTo(Order::class);
    }
}
