<?php 
namespace App; 

class PostItem extends Model {
	protected $table = 'postItem'; 
	protected $touches = ['post'];

	public function post(){
        return $this->belongsTo('App\Post','id');
    }

    public function images(){
        return $this->hasMany('App\PostItemImage','postItemId','id');
    }
}