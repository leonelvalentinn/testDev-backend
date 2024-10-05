<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(100),
            'image' => 'https://ichef.bbci.co.uk/ace/ws/640/cpsprodpb/164EE/production/_109347319_gettyimages-611195980.jpg.webp'
        ];
    }
}
