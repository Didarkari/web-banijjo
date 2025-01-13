<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\AdminModel\Upload;
use App\Models\AdminModel\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $product = Product::create([

                'name' => $faker->word(),
                'price' => $faker->randomFloat(2, 10, 1000), // Price between 10 and 1000
                'quantity' => $faker->numberBetween(0, 100),
                'order' => $faker->randomDigit, // Sequential order
                'status' => $faker->boolean(),
                'discount' => $faker->numberBetween(0, 50), // Discount between 0% and 50%
                'short_description' => $faker->sentence(),
                'description' => $faker->paragraph(),
                'product_details' => $faker->text(),
                'delivery_policy' => $faker->sentence(),
                'return_policy' => $faker->sentence(),
                'category_id' => $faker->numberBetween(1, 5), // Assuming categories 1-5 exist
                'sub_category_id' => $faker->numberBetween(1, 10),
            ]);

            for ($j = 1; $j <= 5; $j++) {
                Upload::create([
                    'path' => "uploads/file/product-image-". rand(1,20).'.jpg',
                    'product_id' => $product->id,
                ]);
            }
        }
    }
}
