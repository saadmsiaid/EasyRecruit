<?php

namespace Database\Factories;

use App\Models\Offre;
use Illuminate\Database\Eloquent\Factories\Factory;

class OffreFactory extends Factory
{
    protected $model = Offre::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph,
            'date_publication' => $this->faker->date(),
        ];
    }
}
