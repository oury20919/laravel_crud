<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('etudiants')->insert([
            [
                'nom' => 'BA',
                'prenom' => 'Boubacar',
                'classe_id' => 1, // Classe 6ème
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Mouhamed',
                'prenom' => 'Dieng',
                'classe_id' => 2, // Classe 5ème
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Diouf',
                'prenom' => 'Laat Dior',
                'classe_id' => 3, // Classe 4ème
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Diouf',
                'prenom' => 'Julien',
                'classe_id' => 4, // Classe 3ème
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'BA',
                'prenom' => 'Mamadou Dian',
                'classe_id' => 5, // Classe Seconde
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Garcia',
                'prenom' => 'Pierre',
                'classe_id' => 6, // Classe Première
                'created_at' => now(),

                'updated_at' => now(),
            ],
            [
                'nom' => 'Nguyen',
                'prenom' => 'Laura',
                'classe_id' => 7, // Classe Terminale
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
