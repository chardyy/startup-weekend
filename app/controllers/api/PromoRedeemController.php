<?php

class PromoRedeemController extends ApiController {

	const REDEEM_CODE_DIGITS = 8;

	protected $model = 'PromoRedeem'

	public function store()
	{
		$promo = \Input::all();
		if($promo)
		{
			$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
			$redeem_code = '';
			for ($i = 0; $i < REDEEM_CODES_DIGITS; $i++)
			{
				$redeem_code .= $characters[rand(0, strlen($characters) - 1)];
			}
			$promo_redeem = array('redeem_code' => $redeem_code);
		}

		$model = Promo::create($promo);

		if($model->isSaved)
		{
			$model_redeem = Promo::create($promo_redeem);
			if($model_redeem->isSaved)
			{
				return static::responseSuccess($model);
			}
		}
		return Response::json($json_error);
		
 
	}
}