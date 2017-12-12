<?php

use Illuminate\Database\Seeder;

class UserAlertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('userAlert');
        $table->insert([
            'id' => 1,
            'userAccountId' => 1,
            'categoryId' => 2,
            'searchContext' => null
        ]);
    }
}
