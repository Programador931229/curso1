<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    protected $Model = Curso::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            //
            'nombre'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'clasificacion'=>$this->faker->randomElement(['Desarrollo Web', 'Diseño web'])
        ];
    }
}
