<?php

namespace Database\Factories;

use App\Models\Endereco;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Endereco>
 */
class EnderecoFactory extends Factory
{
    protected $model = Endereco::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logradouro' => $this->faker->streetAddress,
            'numero_casa' => $this->faker->buildingNumber,
            'complemento' => $this->faker->optional()->address,
            'cep' => $this->faker->postcode,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,

        ];
    }
}
