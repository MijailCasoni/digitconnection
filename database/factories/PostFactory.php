<?php

namespace Database\Factories;

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
            'titulo' => $this->faker->sentence(6),
            'contenido' => $this->faker->paragraphs(3, true),
            'imagen' => 'public/posts/' . $this->faker->image('storage/app/public/posts', 640, 480, null, false),
        ];
    }
}
