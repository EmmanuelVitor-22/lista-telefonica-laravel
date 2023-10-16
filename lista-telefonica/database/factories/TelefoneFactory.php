<?php

namespace Database\Factories;

use App\Models\Contato;
use App\Models\Telefone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefone>
 */
class TelefoneFactory extends Factory
{

    protected $model = Telefone::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_area' => $this->faker->numerify('####'),
            'numero' => $this->faker->numerify('##########'),
            'id_contato' => Contato::factory()
        ];
    }
}
