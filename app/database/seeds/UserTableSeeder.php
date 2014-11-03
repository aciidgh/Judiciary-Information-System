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
		));
		User::create(array(
			'fullname'     => 'lawyer',
			'password' => Hash::make('lawyer'),
		));
		User::create(array(
			'fullname'     => 'judge',
			'password' => Hash::make('judge'),
		));
	}

}
