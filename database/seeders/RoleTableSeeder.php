<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insert([
            ["nom"=>"superadmin"],
            ["nom"=>"admin"],
            ["nom"=>"manager"],
            ["nom"=>"employe"]
        ]);

    }
}
