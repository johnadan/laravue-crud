<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

// use App\Models\Model;
//use App\Models;
//use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Model::class;
    //protected $model = Product::class;
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            //'user_id' => User::factory(),
            //word, text, sentence, paragraph
            'name' => $this->faker->word,
            'category' => $this->faker->word,
            'description' => $this->faker->text,
        ];
    }

}
