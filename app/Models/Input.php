<?php 
namespace App; 

class Input extends Model {
	protected $table = 'input'; 

	public function properties(){
        return $this->hasMany('App\Property','inputId','id')->orderBy('id');
    }
}