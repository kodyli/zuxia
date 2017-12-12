<?php 
namespace App; 

class UserAccount extends Model {
	protected $table = 'userAccount'; 

	public function user(){
        return $this->belongsTo('App\User','userId','id');
    }

    public function subscriptions(){
        return $this->hasMany('App\UserSubscription','userAccountId','id');
    }

    public function alerts(){
        return $this->hasMany('App\UserAlert','userAccountId','id');
    }
}