<?php


class UserFollower extends \BaseModel {


	protected $fillable = array('number_of_followers', 'user_id','follower_id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_followers';


	public function followers()
	{
		return $this->hasMany('Follower');
	}

	public function users()
	{
		return $this->belongsTo('User');
	}

}
