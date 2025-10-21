<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
        'role',
        'date_creation',
    ];

    // 🔗 Relations
    public function notes()
    {
        return $this->hasMany(Note::class, 'id_utilisateur');
    }

    public function partagesRecus()
    {
        return $this->hasMany(Partage::class, 'id_utilisateur_destinataire');
    }
}
