<?php

use Illuminate\Database\Seeder;

class PostItemImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('postItemImage');
        $table->insert([
            'id' => 1,
            'postItemId' => 1,
            'image' => '213564'
        ]);
        $table->insert([
            'id' => 2,
            'postItemId' => 1,
            'image' => '213564'
        ]);
        $table->insert([
            'id' => 3,
            'postItemId' => 1,
            'image' => '213564'
        ]);

        $table->insert([
            'id' => 4,
            'postItemId' => 2,
            'image' => '213564'
        ]);
        $table->insert([
            'id' => 5,
            'postItemId' => 2,
            'image' => '213564'
        ]);
        $table->insert([
            'id' => 6,
            'postItemId' => 2,
            'image' => '213564'
        ]);
    }
}
