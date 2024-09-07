<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    // Définir le nom de la table si elle ne suit pas la convention plurielle
    protected $table = 'etudiants';

    // Les attributs qui sont assignables en masse
    protected $fillable = [
        'nom',
        'prenom',
        'classe_id',
    ];

    /**
     * Relation Many-to-One avec la classe.
     * Un étudiant appartient à une classe.
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
