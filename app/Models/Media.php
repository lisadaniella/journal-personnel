<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';
    public $timestamps = false;

    protected $fillable = [
        'id_note',
        'chemin_fichier',
        'type_media',
        'date_ajout',
    ];

    // 🔗 Relations
    public function note()
    {
        return $this->belongsTo(Note::class, 'id_note');
    }
}
