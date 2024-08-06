<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Beneficiaire;
use App\Models\Cotisation;
use App\Models\Depense;
use App\Models\Mutuelle;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(TypeMutuelleTableSeeder::class);

        Mutuelle::factory(10)->create();
        /*Beneficiaire::factory(10)->create();
        Cotisation::factory(10)->create();
        Depense::factory(10)->create();*/
        User::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);

        //Version correspondante à celle d'en bas
       /* $user=User::find(1);
        $role=Role::find(1);

        DB::table("user_role")->insert([
          "user_id"=>$user->id,
          "role_id"=>$role->id
        ]); */
        //Même version que celle d'en haut
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);


    }
}
