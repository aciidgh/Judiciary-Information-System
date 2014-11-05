<?php

class LoginController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function showLogin()
	{
		// show the form
		return View::make('pages.login');
	}

	public function doLogin()
	{
		
		$rules = array(
			'fullname'    => 'required|alphaNum|min:3', 
			'password' => 'required|alphaNum|min:3' 
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
				$userdata = array(
					'fullname' 	=> Input::get('fullname'),
					'password' 	=> Input::get('password')
					);

				if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
					if(Auth::user()->type == 'registar')
						return Redirect::to('/');
					return Redirect::to('/browse');

			} else {	 	
					return Redirect::to('login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout(); 
		return Redirect::to('login');
	}
}
