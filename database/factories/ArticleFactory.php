<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
// “I’m the factory for the Article mode
// If the factory is named ArticleFactory and is in the Database\Factories namespace, Laravel will automatically assume it's for the Article model.
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this ->faker->paragraph,
            'category_id' => rand(1, 5),
            'user_id' => rand(1, 2),

        ];
    }
}
