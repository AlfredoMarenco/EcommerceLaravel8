<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Product'.$this->faker->randomNumber(),
            'SKU' => $this->faker->ean13(),
            'price' => $this->faker->randomFloat(2,50,1000),
            'discount' => $this->faker->randomFloat(2,50,1000),
            'stock' => $this->faker->randomNumber(),
            'description' => $this->faker->paragraph(),
            'type' => $this->faker->randomElement([Product::ONLINE,Product::STORE])
        ];
    }
}
