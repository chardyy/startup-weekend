<?php


class Promo extends \BaseModel {


	protected $fillable = array('name', 'user_id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'promos';

}
