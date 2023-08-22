<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'total', 'user_id'
    ];

    public function cartProducts()
    {
        return $this->belongsToMany(Product::class, 'cart_items', 'cart_id', 'product_id');
    }

    public function total()
    {
        return $this->cartProducts->sum(function ($item) {
            return $item->price;
        });
    }
}
