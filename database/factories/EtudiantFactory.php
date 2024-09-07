<?php

namespace Database\Factories;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'classe_id' => $this->faker->numberBetween(1, 7),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
