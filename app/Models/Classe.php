<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    // Nom de la table dans la base de données
    protected $table = 'classes';

    // Attributs assignables en masse
    protected $fillable = ['libelle'];

    /**
     * Relation One-to-Many avec les étudiants.
     * Une classe peut avoir plusieurs étudiants.
     */
    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
