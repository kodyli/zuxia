<?php 
namespace App; 

class UserAlert extends Model {
    protected $table = 'userAlert';
    protected $touches = ['userAccount'];

    public function userAccount(){
        return $this->belongsTo('App\UserAccount','userAccountId','id');
    }
}