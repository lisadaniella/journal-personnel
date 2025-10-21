<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partage;

class PartageSeeder extends Seeder
{
    public function run()
    {
        Partage::create([
            'id_note' => 1,
            'id_utilisateur_destinataire' => 2,
            'droits' => 'lecture',
            'date_partage' => now(),
        ]);

        Partage::create([
            'id_note' => 2,
            'id_utilisateur_destinataire' => 1,
            'droits' => 'lecture',
            'date_partage' => now(),
        ]);
    }
}

