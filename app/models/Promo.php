<?php

class Promo extends \Eloquent {
	protected $fillable = ['name', 'detail', 'image', 'category_id', 'user_id'];

	protected $table = 'promos';
}