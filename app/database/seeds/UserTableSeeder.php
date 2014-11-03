<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'fullname'     => 'regis',
			'password' => Hash::make('regis'),
			'type' => 'registar'
		));
		User::create(array(
			'fullname'     => 'lawyer',
			'password' => Hash::make('lawyer'),
			'type' => 'lawyer',
			'balance' => 100.0
		));
		User::create(array(
			'fullname'     => 'judge',
			'password' => Hash::make('judge'),
			'type' => 'judge'
		));
	}

}
