<?php

class Hearing extends Eloquent {
	protected $table = 'hearings';
	public $timestamps = false;

	public function casemodel() {
		return $this->belongsTo('CaseModel');
	}
}
