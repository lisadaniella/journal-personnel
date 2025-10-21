<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    public function run()
    {
        Media::create([
            'id_note' => 1,
            'chemin_fichier' => 'images/photo1.jpg',
            'type_media' => 'image',
            'date_ajout' => now(),
        ]);

        Media::create([
            'id_note' => 2,
            'chemin_fichier' => 'videos/video1.mp4',
            'type_media' => 'video',
            'date_ajout' => now(),
        ]);
    }
}

