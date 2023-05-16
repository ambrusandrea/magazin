<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produse>
 */
class ProdusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nume = $this->faker->text(25);
        $pret = $this->faker->numberBetween($min=10, $max=50);
        
        return [
            'nume'=> $nume,
            'descriere' => $this->faker->text(100),
            'nume_imagine' => $this->faker->imageUrl($width =140, $height=300),
            'pret' => $pret,
        ];
    }
}
