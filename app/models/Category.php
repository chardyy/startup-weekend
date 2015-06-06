<?php

class Category extends \BaseModel {
	protected $fillable = array('name', 'user_id');

	protected $table = 'categories';
}