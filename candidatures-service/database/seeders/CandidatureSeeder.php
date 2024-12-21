<?php

namespace Database\Seeders;

use App\Models\Candidature;
use Illuminate\Database\Seeder;

class CandidatureSeeder extends Seeder
{
    public function run()
    {
        // Create 20 example records in the candidatures table
        Candidature::factory()->count(20)->create();
    }
}
