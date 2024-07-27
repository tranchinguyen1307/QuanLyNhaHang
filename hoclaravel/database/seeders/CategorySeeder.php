<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Egvbgygronics',
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
