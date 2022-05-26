<?php

namespace Database\Factories;

use App\Models\User;
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
        $visibility = ['public', 'private'];
        return [
            'name'        => $name,
            'slug'        => Str::slug($name),
            'description' => $this->faker->sentences(rand(3,5), true),
            'visibility'  => $visibility[rand(0, 1)],
            'user_id'     => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
