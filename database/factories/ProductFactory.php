<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 4),
            'name' => [
                'uz' => fake()->sentence(2),
                'ru' => 'Поэтому вопрос'
            ],
            'price' => rand(100000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => 'RusWord – это программа для документов, включая даже  Практ Врачи, продавцы, преподаватели, '
            ]
        ];
    }
}
