<?php
namespace Database\Factories;

use App\Models\Candidature;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CandidatureFactory extends Factory
{
    protected $model = Candidature::class;

    public function definition()
    {
        // Fetch available `offre_id` values from the Offres Service API
        $response = Http::get('http://localhost:8000/offres');
        
        if ($response->successful()) {
            $offreIds = collect($response->json())->pluck('id')->toArray();
        } else {
            dd('Failed to fetch Offre IDs. HTTP Status: ' . $response->status());
        }
        
        return [
            'candidat_nom' => $this->faker->name,
            'candidat_email' => $this->faker->unique()->safeEmail,
            'cv' => $this->faker->url,
            'offre_id' => $this->faker->randomElement($offreIds),
        ];
    }
}
