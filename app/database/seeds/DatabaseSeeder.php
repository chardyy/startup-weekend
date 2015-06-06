<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	protected $tables = [
		'users', 'promo_codes', 'promos', 'categories'
	];

	//single call for faking class.

	protected $seeders = [
		'UsersTableSeeder',
		
	];

	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
	}

}
