<?php 
namespace App; 

class User extends Model {
	protected $table = 'user';

	public function account(){
        return $this->hasOne('App\UserAccount','userId');
    } 

    public function posts(){
        return $this->hasMany('App\Post','userId','id')->orderBy('id','desc');
    }
}