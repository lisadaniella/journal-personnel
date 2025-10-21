<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    public $timestamps = false;

    protected $fillable = [
        'id_utilisateur',
        'categorie_id',
        'titre',
        'contenu',
        'visibilite',
        'date_creation',
        'date_modification',
    ];

    // 🔗 Relations
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function medias()
    {
        return $this->hasMany(Media::class, 'id_note');
    }

    public function partages()
    {
        return $this->hasMany(Partage::class, 'id_note');
    }

    public function historiques()
    {
        return $this->hasMany(Historique::class, 'id_note');
    }
}

