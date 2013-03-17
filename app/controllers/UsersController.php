<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		Log::info('johnny...getting the users.');

		$users = DB::table('user')->get();
		return Response::json($users);


		/*$users = DB::table('users')->get();

		//
		foreach ($users as $user)
		{
		    var_dump($user->name);
		}*/

		//
		/*return Response::json([
            'error' => false,
            'message' => 'Hello API...'],
            201
        );*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		//$temp = $id;

		$users = DB::table('user')->where('iduser', $id)->first();
		//$uri = Request::path();
		//$users = Request::getUser();

		return Response::json([$users]);
		//return Response::json([$temp]); 

	}

	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}