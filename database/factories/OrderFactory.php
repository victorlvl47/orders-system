<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name,
            'tipo_pedido' => $this->faker->randomElement(['Tipo A', 'Tipo B', 'Tipo C']),
            'descripcion' => $this->faker->text,
            'fecha_entrega' => $this->faker->date,
            'fecha_recoleccion' => $this->faker->date,
            'cantidad_articulos' => $this->faker->randomNumber(),
            'costo' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
