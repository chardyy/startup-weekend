<?php

class ApiController extends \SessionController
{

	protected static $data;
	
 
	protected $model;

	public function _construct()
	{

	}

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		$instance = new static;
		return Response::json( call_user_func($instance->model . '::all',null) );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$instance = new static;
		
		$data = \Input::all();
		$model = call_user_func($instance->model . '::create', $data);
		$json_error = $model;
		
		if($model->save())
		{
			return static::responseSuccess($model);
		}
		else
		{

			return Response::json($json_error);
		}
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$instance = new static;

		$model = call_user_func($instance->model . '::find', $id);
		$json_error = ['message' => 'An error occured. Data was not found'];
		
		if($model)
		{
			return static::responseSuccess($model);
		}
		else
		{

			return Response::json($json_error);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
