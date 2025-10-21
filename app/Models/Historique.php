<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $table = 'historiques';
    public $timestamps = false;

    protected $fillable = [
        'id_note',
        'contenu_precedent',
        'date_modification',
    ];

    // 🔗 Relations
    public function note()
    {
        return $this->belongsTo(Note::class, 'id_note');
    }
}
