<?php

use Illuminate\Database\Seeder;

class PostItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table = DB::table('postItem');
      $table->insert([
        'id' => 1,
        'postId' => 1,
        'name' => 'iPhone 6s',
        'details' => json_encode(array(
          'model' => '6s'
        )),
        'isActive' => true,
        'price' => 20.01,
        'isPriceNegotiable' => true,
        'categoryId' =>2
        ]);

      $table->insert([
        'id' => 2,
        'postId' => 1,
        'name' => 'Lenovo E530',
        'details' =>json_encode(array(
          'brand' => 'Lenovo'
        )) ,
        'isActive' => true,
        'price' => 10.01,
        'isPriceNegotiable' => true,
        'categoryId' =>3
        ]);
    }
  }
