<?php


class Promo extends \BaseModel {


	protected $fillable = ['name', 'detail', 'image', 'category_id', 'user_id'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'promos';

}

