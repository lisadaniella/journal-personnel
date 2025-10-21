<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partage extends Model
{
    use HasFactory;

    protected $table = 'partages';
    public $timestamps = false;

    protected $fillable = [
        'id_note',
        'id_utilisateur_destinataire',
        'droits',
        'date_partage',
    ];

    // 🔗 Relations
    public function note()
    {
        return $this->belongsTo(Note::class, 'id_note');
    }

    public function destinataire()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur_destinataire');
    }
}

