<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Alumno::factory(10)->create();
        Alumno::create([
            'nombre'   => 'Juan',
            'edad'     => 18,
            'nc'       =>25068418,
            'sexo'     =>'1'
        ]);

        Alumno::create([
            'nombre'   => 'María',
            'edad'     => 17,
            'nc'       =>25587458,
            'sexo'     =>'0'
        ]);

        
    }
}
