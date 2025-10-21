<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    public function run()
    {
        Note::create([
            'id_utilisateur' => 1,
            'categorie_id' => 1,
            'titre' => 'Ma première note',
            'contenu' => 'Ceci est le contenu de ma première note.',
            'visibilite' => 'privée',
            'date_creation' => now(),
            'date_modification' => now(),
        ]);

        Note::create([
            'id_utilisateur' => 2,
            'categorie_id' => 2,
            'titre' => 'Note de test',
            'contenu' => 'Exemple de note pour test.',
            'visibilite' => 'publique',
            'date_creation' => now(),
            'date_modification' => now(),
        ]);
    }
}

