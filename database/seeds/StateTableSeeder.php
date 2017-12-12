<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('state');
        $table->insert([
            'id' => 1,
            'name' => 'CA',
            'countryId' => 1
        ]);
        $table->insert([
            'id' => 2,
            'name' => 'IN',
            'countryId' => 1
        ]);
    }
}
