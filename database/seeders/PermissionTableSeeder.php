<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("permissions")->insert([
            ["nom"=> "ajouter une mutuelle"],
            ["nom"=> "consulter une mutuelle"],
            ["nom"=> "editer une mutuelle"],
            
            ["nom"=> "ajouter un beneficiaire"],
            ["nom"=> "consulter un beneficiaire"],
            ["nom"=> "editer un beneficiaire"],

            ["nom"=> "ajouter une cotisation"],
            ["nom"=> "consulter une cotisation"],
            ["nom"=> "editer une cotisation"],

            ["nom"=> "ajouter une depense"],
            ["nom"=> "consulter une depense"],
            ["nom"=> "editer une depense"]
        ]);
    }
}
