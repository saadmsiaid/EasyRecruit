<?php

namespace Database\Factories;

use App\Models\Candidature;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CandidatureFactory extends Factory
{
    protected $model = Candidature::class;

    public function definition()
    {
        // Get a list of Offre IDs from the offres service (or any other source you prefer)
        $offreIds = DB::connection('mysql') // Specify your DB connection here if needed
                      ->table('offres')  // Assuming the table is named "offres"
                      ->pluck('id')->toArray(); // Get all IDs

        return [
            'candidat_nom' => $this->faker->name,
            'candidat_email' => $this->faker->unique()->safeEmail,
            'cv' => $this->faker->url,  // You could replace this with a file path if you need
            'offre_id' => $this->faker->randomElement($offreIds),  // Randomly assign an offer ID
        ];
    }
}
