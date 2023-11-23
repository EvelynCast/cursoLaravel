<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nc = $this->faker->email();
        $nombre = $this->faker->name();
        $sexo = $this->faker->boolean();
        $edad = $this->$faker->numberBetween(18,90);
        return [
            'nombre'         => $nombre,
            'semestre'       => $semestre,
            'especialidad'   => $especialidad,
        ];
    }
}
