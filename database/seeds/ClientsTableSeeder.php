<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Client::class,10)
            ->states(\App\Models\Client::TYPE_INDIVIDUAL)->create();
        factory(\App\Models\Client::class,10)
            ->states(\App\Models\Client::TYPE_LEGAL)->create();
        //
    }
}
