<?php 
namespace App; 

class Country extends Model {
	protected $table = 'country'; 

	public function states(){
        return $this->hasMany('App\State','stateId','id')->orderBy('name', 'asc');
    }
}