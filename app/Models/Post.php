<?php 
namespace App; 

class Post extends Model {
	protected $table = 'post';

	public function schools(){
        return $this->belongsToMany('App\School','postSchool','postId','schoolId');
    }

    public function items(){
        return $this->hasMany('App\PostItem','postId','id')->orderBy('id');
    }

    public function user(){
        return $this->belongsTo('App\User','id');
    }
}