<?php 
namespace App; 

class UserSubscription extends Model {
	protected $table = 'userSubscription'; 
	protected $touches = ['userAccount'];

	public function userAccount(){
        return $this->belongsTo('App\UserAccount','userAccountId','id');
    }
}