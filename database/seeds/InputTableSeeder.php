<?php

use Illuminate\Database\Seeder;

class InputTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs =array(
            'text','number','email',
            'button','checkbox','color',
            'date','datetime','datetime-local',
            'file','hidden','image',
            'month','password','radio',
            'range','reset','search',
            'submit','tel','time',
            'url','week'
        );
    	$table = DB::table('input');
            foreach ($inputs as $input) {
                $table->insert([
                'type' => $input
            ]);
        }
    }
}
