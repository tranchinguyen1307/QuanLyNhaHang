<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'This is the first product.',
                'price' => 9.99,
                'sale' => 7.99,
                'image' => 'menu-1.jpg',
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Product 2',
                'description' => 'This is the second product.',
                'price' => 14.99,
                'sale' => 11.99,
                'image' => 'menu-2.jpg',
                'category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
