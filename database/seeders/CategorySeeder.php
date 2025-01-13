<?php

namespace Database\Seeders;

use App\Models\AdminModel\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) { // Create 5 categories
            Category::create([
                'name' => $faker->word(),
                'order' => $faker->numberBetween(1,20),
                'status' => $faker->boolean(),
            ]);
        }
    }
}

