<?php


class PromoRedeem extends \BaseModel {


	protected $fillable = array('promo_id', 'user_id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'promo_redeem';

}
