<?php

namespace Database\Factories;

use App\Models\UserInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactInfo>
 */
class ContactInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pin' => fake()->numberBetween(787875, 785999),
            'address' => fake()->address(),
            'desc' => fake()->paragraph(2),
            'user_info_id' => UserInfo::all()->random()->id
        ];
    }
}
