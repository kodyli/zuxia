<?php 
namespace App; 

class PostItemImage extends Model {
	protected $table = 'postItemImage'; 
	protected $touches = ['postItem'];

	public function item(){
        return $this->belongsTo('App\PostItem','id');
    }
}