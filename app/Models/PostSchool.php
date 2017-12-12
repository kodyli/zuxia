<?php 
namespace App; 

class PostSchool extends Model {
	protected $table = 'postSchool'; 
	protected $touches = ['post'];
}