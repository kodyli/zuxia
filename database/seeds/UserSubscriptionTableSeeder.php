<?php

use Illuminate\Database\Seeder;

class UserSubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('userSubscription');
        $table->insert([
            'id' => 1,
            'userAccountId' => 1,
            'schoolId' => 1,
            'isPrimary' => true
        ]);
    }
}
