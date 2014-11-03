<?php

class CaseTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('case_model')->delete();
		DB::table('hearings')->delete();
		$case1 = CaseModel::create(array(
			'casename'     => 'People vs Mr Stark',
			'defendant' => 'Stuart Stark',
			'defaddress' => 'Delhi',
			'status' => 'closed',
			'crimetype' => 'murder',
			'date' => '4/10/2014',
			'location' => 'Delhi',
			'officer' => 'Tandan Rao',
			'arrestdate' => '5/10/2014',
			'judge' => 'Himanshu',
			'judgement' => 'Death by Trial',
			'dateclosed' => '7/10/2014',
			'prosecutor' => 'Bond',
			'startdate' => '6/10/2014',
			'expectedcomplete' => '7/10/2014',
		));

Hearing::create(array(
			'hearingdate'    => '4/10/2014',
			'summary'     => 'sup bro',
			'case_id' => $case1->id
		));
Hearing::create(array(
			'hearingdate'    => '14/10/2014',
			'summary'     => 'sup bro2',
			'case_id' => $case1->id
		));

		$case2 = CaseModel::create(array(
			'casename'     => 'People vs Mr James',
			'defendant' => 'James Stark',
			'defaddress' => 'Mumbai',
			'status' => 'open',
			'crimetype' => 'murder',
			'date' => '8/10/2014',
			'location' => 'Delhi',
			'officer' => 'Tandan Rao',
			'arrestdate' => '9/10/2014',
			'judge' => 'Himanshu',
			'judgement' => 'Death by Trial',
			'dateclosed' => '9/10/2014',
			'prosecutor' => 'Rao',
			'startdate' => '9/10/2014',
			'expectedcomplete' => '9/10/2014',
		));
		$case3 = CaseModel::create(array(
			'casename'     => 'People vs Mr Pulesh',
			'defendant' => 'Pulesh Ram',
			'defaddress' => 'Manipal',
			'status' => 'closed',
			'crimetype' => 'murder',
			'date' => '4/10/2014',
			'location' => 'Delhi',
			'officer' => 'Tandan Rao',
			'arrestdate' => '5/10/2014',
			'judge' => 'Himanshu',
			'judgement' => 'Death by Trial',
			'dateclosed' => '7/10/2014',
			'prosecutor' => 'Bond',
			'startdate' => '6/10/2014',
			'expectedcomplete' => '7/10/2014',
		));
	}

}
