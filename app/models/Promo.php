<?php


class Promo extends \BaseModel {


	protected $fillable = ['name', 'details', 'image', 'category_id', 'user_id'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'promos';

	public function scopeName($query, $s_name)
	{
		return $query->where('name', 'like', '%'.$s_name.'%');
	}

}

