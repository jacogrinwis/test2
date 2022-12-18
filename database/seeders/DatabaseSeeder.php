<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->command->info('User Seeder created.');

        $this->call(CategorySeeder::class);
        $this->command->info('Category Seeder created.');

        $this->call(TagSeeder::class);
        $this->command->info('Tag Seeder created.');

        $this->call(PostSeeder::class);
        $this->command->info('Post Seeder created.');
    }
}
