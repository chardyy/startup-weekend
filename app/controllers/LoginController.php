<?php

class LoginController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /login
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /login/create
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /login
	 *
	 * @return Response
	 */
	public function store()
	{
		
	}

	public function login()
	{
		if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
			$username = Input::get('username');
            $user = DB::table('users')->where('username', $username)->first();
            Session::put('id', $user->id);
            return Redirect::to('/')->with('message', 'Thanks for signing in');
		}else
			return Redirect::to('/')->with('message', 'Thanks for signing in');
	}

	/**
	 * Display the specified resource.
	 * GET /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /login/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}