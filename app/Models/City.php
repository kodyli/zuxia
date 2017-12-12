<?php 
namespace App; 

class City extends Model {
	protected $table = 'city'; 

	public function state(){
        return $this->belongsTo('App\State','id');
    }

    public function schools(){
        return $this->hasMany('App\School','schoolId','id')->orderBy('name', 'asc');
    }
}