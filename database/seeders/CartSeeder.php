<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all users
        $users = User::all();

        // Loop through users and create a cart for each user
        foreach ($users as $user) {
            $cart = Cart::create([
                'user_id' => $user->id,
            ]);

            // Adding random products to the cart
            // Get 3 random products
            $products = Product::inRandomOrder()->take(3)->get(); 
            foreach ($products as $product) {
                $cart->items()->create([
                    'product_id' => $product->id,
                    // Random quantity between 1 and 3
                    'quantity' => rand(1, 3), 
                ]);
            }
        }
    }
}
