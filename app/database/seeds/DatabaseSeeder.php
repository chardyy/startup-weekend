<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	protected $tables = [
		'users', 'promo_codes', 'promos', 'categories', 'comments'
	];

	//single call for faking class.

	public function run()
	{
		Eloquent::unguard();

			$this->call('UsersTableSeeder');
			$this->call('CategoriesTableSeeder');
			$this->call('PromosTableSeeder');
			$this->call('PromoCodesTableSeeder');
	
	}

}
