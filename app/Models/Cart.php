<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id'];

    // A Cart has many CartItems
    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
