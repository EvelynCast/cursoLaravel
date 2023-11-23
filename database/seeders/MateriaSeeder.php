<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
            'nombre'          => 'Inglés',
            'semestre'        => 5,
            'especialidad'    => 'Programación',
        ]);

    }
}
