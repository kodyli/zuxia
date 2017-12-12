<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('school');
        $table->insert([
            'id' => 1,
            'name' => 'Valparaiso University',
            'nickname' => 'Valpo',
            'address' => '1700 Chapel Dr',
            'cityId' => 1,
            'zipCode' => '46383'
        ]);
    }
}
