<?php 
namespace App; 

class Category extends Model {
	protected $table = 'category';

	public function properties(){
        return $this->hasMany('App\Property','categoryId','id')->orderBy('id');
    }
}