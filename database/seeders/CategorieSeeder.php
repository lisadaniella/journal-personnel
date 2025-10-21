<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    public function run()
    {
        Categorie::create(['nom' => 'Travail', 'description' => 'Notes liées au travail']);
        Categorie::create(['nom' => 'Personnel', 'description' => 'Notes personnelles']);
        Categorie::create(['nom' => 'Projets', 'description' => 'Notes de projets']);
    }
}

