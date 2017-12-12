<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('user');
        $table->insert([
            'id' => 1,
            'firstName' => 'Yansan',
            'lastName' => 'Li',
            'email' => 'yansan.li@foxmail.com',
            'mobile' => '609-423-5347',
            'isPrivacyEnable' => false
        ]);
    }
}
