<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array('username' => 'admin', 'password' => Hash::make('PASSWORD_HERE'), 'email' => 'EMAIL_HERE', 'status' => '1', 'permission' => '1'));
	}
}