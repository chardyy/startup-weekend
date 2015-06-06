<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$category_name = ['Event', 'Product', 'Service'];

		foreach(range(1, 3) as $index)
		{
			Category::create([
				'name' => $category_name[ rand(0, 2) ]
			]);
		}
	}

}