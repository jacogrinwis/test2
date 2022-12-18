<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'slug' => Str::slug($this->faker->words(5, true), '-'),
            'body' => $this->faker->sentence(45),
            'user_id' => 1,
            'category_id' => rand(1, 6),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
