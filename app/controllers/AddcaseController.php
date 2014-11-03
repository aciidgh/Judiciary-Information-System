<?php

class AddcaseController extends BaseController {

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

	public function servePage()
	{
		return View::make('pages.addcase');
	}

	public function store()
	{

		$casemodel = new CaseModel;
		$casemodel->casename = Input::get('casename');
        $casemodel->defendant = Input::get('defendant');
        $casemodel->defaddress = Input::get('defaddress');
        $casemodel->crimetype = Input::get('crimetype');
        $casemodel->date = Input::get('date');
        $casemodel->location = Input::get('location');
        $casemodel->officer = Input::get('officer');
        $casemodel->arrestdate = Input::get('arrestdate');
        $casemodel->judge = Input::get('judge');
        $casemodel->judgement = Input::get('judgement');
        $casemodel->dateclosed = Input::get('dateclosed');
        $casemodel->prosecutor  = Input::get('prosecutor');
        $casemodel->startdate = Input::get('startdate');
        $casemodel->expectedcomplete  = Input::get('expectedcomplete');
        
        $casemodel->save();
	}
}
