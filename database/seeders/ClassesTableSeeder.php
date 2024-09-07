<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Ajout de l'importation

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('classes')->insert([
            ['libelle' => '6éme'],
            ['libelle' => '5éme'],
            ['libelle' => '4éme'],
            ['libelle' => '3éme'],
            ['libelle' => 'Second'],
            ['libelle' => 'Premiere'],
            ['libelle' => 'Terminal'],
        ]);
    }
}

