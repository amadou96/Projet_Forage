<?php

use Illuminate\Database\Seeder;

class ComptablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Comptable::class,1)->create();
    }
}
