<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ville;
use App\Models\Etudiant;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Create 15 Ville instances and persist them to the database
        Ville::factory()->count(15)->create();

        // Create 100 Etudiant instances and persist them to the database
        Etudiant::factory()->count(100)->create();
    }
}
