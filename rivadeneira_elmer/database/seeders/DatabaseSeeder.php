<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Rol;
use \App\Models\Person;
use \App\Models\Configuration;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Rol::factory(10)->create();
        \App\Models\Person::factory(10)->create();
        \App\Models\Configuration::factory(10)->create();
    }
}
