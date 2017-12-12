<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(InputTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PropertyTableSeeder::class);

        $this->call(CountryTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(SchoolTableSeeder::class);

        $this->call(UserTableSeeder::class);
        $this->call(UserAccountTableSeeder::class);
        $this->call(UserSubscriptionTableSeeder::class);
        $this->call(UserAlertTableSeeder::class);

        $this->call(PostTableSeeder::class);
        $this->call(PostItemTableSeeder::class);
        $this->call(PostItemImageTableSeeder::class);
        $this->call(PostSchoolTableSeeder::class);
    }
}
