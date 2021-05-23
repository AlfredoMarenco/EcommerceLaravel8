<?php

namespace Database\Seeders;

use App\Models\Image;
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
        $products = Product::factory(30)->create();

        foreach ($products as $product) {
            Image::factory(3)->create([
                'imageable_id' => $product->id,
                'imageable_type' => 'App\Models\Product'
            ]);

            $product->categories()->attach([
                rand(1, 2)
            ]);
        }
    }
}
