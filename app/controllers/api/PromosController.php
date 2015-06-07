<?php

class PromosController extends ApiController {

	protected $model = 'Promo';


	public function store()
	{
		$promo_data = \Input::all();

		$json_error = array('message' => "Error Occured, promo cannot be added");
		if(!is_null($promo_data))
		{
			$promo_data['user_id'] = Session::get('user_id');

			$promo = Promo::create($promo_data);

			if($promo->save())
			{
				$a_promo_redeem = array('promo_id' => $promo->id,
										'user_id' => $promo->user_id,
										'number_of_followers' => 0
										);

				$promo_redeem = PromoRedeem::create($a_promo_redeem);
				if($promo_redeem->save())
				{
					return static::responseSuccess($a_promo_redeem );
				}
			}
			return Response::json($json_error);
		}
		
 
	}
}