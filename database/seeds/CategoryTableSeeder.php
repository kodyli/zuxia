<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $table = DB::table('category');
        $table->insert([
        	'id' => 1,
            'name' => 'Electronics',
            'maximumImagesAllowed' => 4,
            'postItemValidityIntervalInDays' =>30,
            'parentCategoryId' => 1
        ]);

        $table->insert([
            'id' => 2,
            'name' => 'Cell Phone & Phone',
            'maximumImagesAllowed' => 4,
            'postItemValidityIntervalInDays' =>30,
            'parentCategoryId' => 1
        ]);

        $table->insert([
            'id' => 3,
            'name' => 'Computers',
            'maximumImagesAllowed' => 4,
            'postItemValidityIntervalInDays' =>30,
            'parentCategoryId' => 1
        ]);
        
    }
}
