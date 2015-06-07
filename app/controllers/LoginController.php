<?php

class LoginController extends ApiController {

	public function login()
	{
		Session::flush();
		$data = array('username' => Input::get('username'),
					  'password' => Input::get('password')
					  );
		$user = \User::login($data);
		if( $user->first())
		{
			Session::put('user_id', $user->first()->id);
			return Redirect::to('/')->with('message', 'Thanks for signing in');
		}
	}

}