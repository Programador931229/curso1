<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $Curso = new Curso();
        $Curso->nombre = 'PHP';
        $Curso->descripcion = 'Lenguaje Orientado a Objetos';
        $Curso->clasificacion = 'Te ayudara a crear grandes proyectos';
        $Curso->save();

    }
}
