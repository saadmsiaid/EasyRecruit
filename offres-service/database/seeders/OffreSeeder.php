<?php

namespace Database\Seeders;

use App\Models\Offre;
use Illuminate\Database\Seeder;

class OffreSeeder extends Seeder
{
    public function run()
    {
        // Create 10 example records in the offres table
        Offre::factory()->count(10)->create();
    }
}
