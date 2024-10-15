<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Faker instance
        $faker = \Faker\Factory::create();

        // Create 15 random products with images
        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence(10),
                'price' => $faker->randomFloat(2, 10, 1000),
                'stock_quantity' => $faker->numberBetween(5, 100),
                'image' => $faker->imageUrl(640, 480, 'product', true, 'fashion'),
            ]);
        }
    }
}
