<?php

use Illuminate\Database\Seeder;

class UserAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('userAccount');
        $table->insert([
            'id' => 1,
            'userId' => 1,
            'userName' => 'longmashou',
            'password'=>'password',
            'email' => 'yansan.li@foxmail.com'
        ]);
    }
}
