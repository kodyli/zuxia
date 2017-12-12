<?php

use Illuminate\Database\Seeder;

class PostSchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('postSchool');
        $table->insert([
        	'id' => 1,
        	'postId' => 1,
        	'schoolId' => 1
        ]);
    }
}
