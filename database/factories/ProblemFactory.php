<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name      = $this->faker->words(2, true);
        $visiblity = ['public', 'private'];
        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'visiblity'   => $visiblity[rand(0, 1)],
            'user_id'     => '1',
            'category_id' => Category::all()->random()->id,
        ];
    }
}
