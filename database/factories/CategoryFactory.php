<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->words(2, true);
        return [
            'name'    => $name,
            'slug'    => Str::slug($name),
            'user_id' => User::all()->random()->id
        ];
    }
}
