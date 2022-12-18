<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => $this->faker->words(5, true),
                'slug' => Str::slug($this->faker->words(5, true), '-'),
                'body' => $this->faker->sentence(45),
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Post::insert($data);
    }
}
