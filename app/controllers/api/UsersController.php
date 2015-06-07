<?php

class UsersController extends ApiController {

	protected $model = 'User';

	public static function getSessionUser()
	{
		$user = [];
		if(sizeof(Session::get('user')) == 1)
		{
			foreach(Session::get('user') as $obj)
			{
				$user =$obj;
			}
		}
		return $user;
	}

}