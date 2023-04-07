<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models;
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
    public function definition(): array
    {
        return [
            'user_id' => Models\User::factory(),
            'category_id' => Models\Category::factory(),
            'title' => $this->faker->sentence,
            'slug'=> $this->faker->slug,
            'excerpt' => $this->faker->sentence,
            'body' => $this->faker->paragraph
        ];
    }
}
