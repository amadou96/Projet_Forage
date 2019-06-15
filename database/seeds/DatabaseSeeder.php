<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AgentsTableSeeder::class);
        $this->call(GestionnairesTableSeeder::class);
        $this->call(VillagesTableSeeder::class);
        $this->call(Administrateurs::class);
        $this->call(Comptables::class);
        $this->call(Clients::class);
        $this->call(Types::class);

    }
}
