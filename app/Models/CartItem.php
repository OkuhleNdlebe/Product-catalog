<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'quantity'];

    // A CartItem belongs to a Cart
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    // A CartItem belongs to a Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
