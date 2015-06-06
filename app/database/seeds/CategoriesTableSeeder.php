<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$userIds = User::lists('id');

		$category_name = ['Events', 'Product', 'Services'];

		foreach(range(1, 10) as $index)
		{
			Category::create([
				'name' => $category_name[ rand(0, 2) ],
				'user_id' => $faker->randomElement($userIds),
				'created_at' => $faker->dateTime()
			]);
		}
	}

}
