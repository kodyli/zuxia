<?php 
namespace App; 

class School extends Model {
	protected $table = 'school';

	public function city(){
        return $this->belongsTo('App\City','id');
    }

    public function posts(){
        return $this->belongsToMany('App\Post','postSchool','schoolId','postId');
    }
}