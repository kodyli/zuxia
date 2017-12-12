<?php

use Illuminate\Database\Seeder;

class PropertyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('property');
        $table->insert([
            'id' => 1,
            'inputId' => 1,
            'label' => 'Model',
            'name' => 'model',
            'isMandatory' => true,
            'categoryId' => 2
        ]);

        $table->insert([
            'id' => 3,
            'inputId' => 1,
            'label' => 'Brand',
            'name' => 'brand',
            'isMandatory' => true,
            'categoryId' => 3
        ]);

    }
}
