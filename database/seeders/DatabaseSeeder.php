<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etudiant; // Importer le modèle Etudiant

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Crée 30 enregistrements dans la table etudiants
        Etudiant::factory(30)->create();

        // Décommenter la ligne suivante si vous souhaitez aussi exécuter le seeder ClassesTableSeeder
        // $this->call(ClassesTableSeeder::class);
    }
}

