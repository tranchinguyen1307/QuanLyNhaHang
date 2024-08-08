<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProductSeeder::class,
<<<<<<< HEAD
            CategorySeeder::class,
            // UserSeeder::class,
=======
            CategorySeeder::class
            
>>>>>>> c22445650e6bb0211aba8ea9460f9e0d3e71147a
        ]);
    }
}
