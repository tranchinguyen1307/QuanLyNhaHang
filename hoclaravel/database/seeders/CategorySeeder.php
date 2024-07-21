<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'status' => 'active',
            ],
            [
                'name' => 'Clothing',
                'status' => 'active',
            ],
            [
                'name' => 'Books',
                'status' => 'active',
            ],
            [
                'name' => 'Furniture',
                'status' => 'active',
            ],
            [
                'name' => 'Sports',
                'status' => 'active',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
