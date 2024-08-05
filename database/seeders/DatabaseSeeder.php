<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Beneficiaire;
use App\Models\Cotisation;
use App\Models\Depense;
use App\Models\Mutuelle;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);

// \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
