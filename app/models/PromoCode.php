<?php

class PromoCode extends \Eloquent {
	protected $fillable = ['code', 'user_id', 'promo_id'];

	protected $table = 'promo_codes';
}