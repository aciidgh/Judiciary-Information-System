<?php

class CaseController extends BaseController {

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

	public function servePage($id)
	{
		$caseModel = CaseModel::find($id);
		return View::make('pages.case',array('caseModel' => $caseModel));
	}
	public function store($id)
	{
		$caseModel = CaseModel::find($id);
		if(Input::get('close') == 'Close Case')
		{
			$caseModel->judgement = Input::get('summary');
			$caseModel->dateclosed = Input::get('date');
			$caseModel->save();
		}
		else
		{
			$hearing = new Hearing;
			$hearing->summary = Input::get('summary');
			$hearing->hearingdate = Input::get('date');
			$hearing->case_id = $id;
			$hearing->save();
		}
		return Redirect::to('case/'.$id);
		
	}

}
