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
    public function definition(): array
    {
        $title = fake()->sentence;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'thumbnail' => fake()->imageUrl(),
            'body' => fake()->realText(5000),
            'active' =>'1',
            'published_at' => fake()->dateTimeThisYear(),
            'user_id' => 1,
            'meta_title' =>  'VOOLDZ Blog - ' . $title,
            'meta_description' => fake()->realText(254),
        ];
    }
}
