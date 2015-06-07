<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public static function responseSuccess($data)
	{
		$a_data = new ArrayObject();
		foreach($data as $obj)
		{
			$a_data->append($obj);
		}
		return ['isSuccessful' => 'true', 'data' => $a_data];
	}

}
