<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Cheeseburger',
            'price' => 5.99,
            'stock' => 10,
            'information' => 'Delicious cheeseburger with fresh lettuce, tomato, and cheese.',
            'image' => 'cheeseburger.jpg',
        ]);
    }
}
