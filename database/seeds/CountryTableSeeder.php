<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('country');
        $table->insert([
            'id' => 1,
            'name' => 'USA'
        ]);
    }
}
