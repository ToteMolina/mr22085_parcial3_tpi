<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre"=>$this->faker->word(),
            "precio"=>$this->faker->randomFloat(null, 1, 100),
            "idcategoria"=>$this->faker->numberBetween(1, 10),
            "idproveedor"=>$this->faker->numberBetween(1, 10),
        ];
    }
}
