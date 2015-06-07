<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$category_name = ['Event', 'Product', 'Service'];

		foreach($category_name as $index)
		{
			Category::create([
				'name' => $index
			]);
		}
	}

}