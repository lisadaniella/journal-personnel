<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    public function run()
    {
        Utilisateur::create([
            'nom' => 'Alice',
            'email' => 'alice@example.com',
            'mot_de_passe' => Hash::make('password123'),
            'role' => 'admin',
            'date_creation' => now(),
        ]);

        Utilisateur::create([
            'nom' => 'Bob',
            'email' => 'bob@example.com',
            'mot_de_passe' => Hash::make('password123'),
            'role' => 'utilisateur',
            'date_creation' => now(),
        ]);
    }
}
