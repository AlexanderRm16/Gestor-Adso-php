<?php

namespace Database\Factories;

use App\Models\Aprendiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class AprendizFactory extends Factory
{
    protected $model = Aprendiz::class;

    public function definition(): array
    {
        return [
            'nombre'    => $this->faker->name(),
            'documento' => (string) $this->faker->unique()->numerify('##########'),
            'correo'    => $this->faker->unique()->safeEmail(),
            'ficha_id'  => $this->faker->optional()->numberBetween(100000, 999999),
        ];
    }
}
