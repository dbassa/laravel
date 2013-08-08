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
			'name'=>'Daniel Bassa',
			'email'=>'info@shoppix.es',
			'password'=>Hash::make('1234'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		User::create(array(
			'name'=>'Josy Lira',
			'email'=>'josylira@hotmail.com',
			'password'=>Hash::make('1234'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

	}

}