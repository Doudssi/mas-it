<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeMutuelleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("type_mutuelles")->insert([
            ["type"=>"Santé"],
            ["type"=>"Retraite-Décès"],
            ["type"=>"Agricole"],
            ["type"=>"Mixte"]
        ]);
    }
}
