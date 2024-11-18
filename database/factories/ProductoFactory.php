<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
    'asignatura' => fake()->word(),
    'descripcion' => fake()->text(),
    'precio_hora' => fake()->numberBetween(10000, 500000),
    'cantidad_horas' => fake()->numberBetween(1,50)
    ];
    }
}
