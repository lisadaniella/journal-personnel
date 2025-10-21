<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Historique;

class HistoriqueSeeder extends Seeder
{
    public function run()
    {
        Historique::create([
            'id_note' => 1,
            'contenu_precedent' => 'Version initiale de la note 1.',
            'date_modification' => now(),
        ]);

        Historique::create([
            'id_note' => 2,
            'contenu_precedent' => 'Version initiale de la note 2.',
            'date_modification' => now(),
        ]);
    }
}

