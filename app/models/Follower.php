<?php


class Follower extends \BaseModel {


	protected $fillable = array('follower_id', 'user_id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'followers';

}
