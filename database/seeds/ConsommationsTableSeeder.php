<?php

use Illuminate\Database\Seeder;

class ConsommationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Consommation::class,1000)->create(["factures_id"=>null]);
    }
}
