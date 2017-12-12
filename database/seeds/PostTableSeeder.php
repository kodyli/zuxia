<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('post');
        $table->insert([
            'id' => 1,
          	'title' => 'Moving Sales',
          	'description' => 'Moving sales, include computer and cell phone.',
          	'isSeller' => true,
          	'isIndividual' => true,
          	'userId' => 1
        ]);
    }
}
