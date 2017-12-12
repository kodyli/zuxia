<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table=DB::table('city');
        $table->insert([
            'id' => 1,
            'name' => 'Valparaiso',
            'stateId' => 2
        ]);
    }
}
