<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\AdminModel\SubCategory;

class SubCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 20; $i++) { // Create 10 subcategories
           SubCategory::create([
                'name' => $faker->word(),
                'category_id' => $faker->numberBetween(1,10), // Randomly associate with a category
                'order' => $faker->numberBetween(1,10),
                'status' => $faker->boolean(),
            ]);
        }
    }
}

