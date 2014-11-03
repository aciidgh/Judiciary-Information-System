<?php

class CaseModel extends Eloquent {

	protected $table = 'case_model';
	
	public $timestamps = false;

	public function hearings()
    {
        return $this->hasMany('Hearing','case_id');
    }
}
