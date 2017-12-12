<?php 
namespace App; 

class Property extends Model {
	protected $table = 'property';
	
	public function category(){
        return $this->belongsTo('App\Category','id');
    }

    public function input(){
        return $this->belongsTo('App\Input','id');
    }
}