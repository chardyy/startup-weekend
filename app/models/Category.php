<?php

class Category extends \Eloquent {
	protected $fillable = ['name', 'user_id'];

	protected $table = 'categories';
}