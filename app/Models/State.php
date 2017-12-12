<?php 
namespace App; 

class State extends Model {
	protected $table = 'state'; 

	public function cites(){
        return $this->hasMany('App\City','cityId','id')->orderBy('name', 'asc');
    }
    public function country(){
        return $this->belongsTo('App\Country','id');
    }
}