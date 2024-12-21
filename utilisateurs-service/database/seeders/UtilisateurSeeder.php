<?php

namespace Database\Seeders;

use App\Models\Utilisateur;
use Illuminate\Database\Seeder;

class UtilisateurSeeder extends Seeder
{
    public function run()
    {
        // Create 10 example records in the utilisateurs table
        Utilisateur::factory()->count(10)->create();
    }
}
