<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'description',
    ];

    // 🔗 Relations
    public function notes()
    {
        return $this->hasMany(Note::class, 'categorie_id');
    }
}
