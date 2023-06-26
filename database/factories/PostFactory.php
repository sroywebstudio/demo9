<?php

namespace Database\Factories;

use App\Models\PostCategory;
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
        $title = fake()->text(50);
        $slug = Str::slug($title);
        $imageName = 'post/image'.fake()->randomElement([1,2,3,4,5]). '.jpg';
        
        return [
            'title' => $title,
            'slug' => $slug,
            'image' => $imageName,
            'status' => fake()->randomElement([1,0]),
            'post_category_id' => PostCategory::all()->random()->id
        ];
    }
}
