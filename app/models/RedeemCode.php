<?php


class RedeemCode extends \BaseModel {


	protected $fillable = array('promo_redeem_id', 'promo_code');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'redeem_code';

}
