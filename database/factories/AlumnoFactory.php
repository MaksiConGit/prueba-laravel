<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=> fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=>fake()->password(),
            'is_active'=>fake()->numberBetween(0, 1),
            'descripcion'=>fake()->text(100),
            'created_at'=>fake()->dateTime(),
            'updated_at'=>fake()->dateTime(),  
        ];
    }
}
