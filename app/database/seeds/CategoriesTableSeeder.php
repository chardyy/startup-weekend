<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$userIds = User::lists('id');

		foreach(range(1, 10) as $index)
		{
			Category::create([
				'user_id' => $faker->randomElement($userIds),
				'name' => $faker->name,
				'created_at' => $faker->dateTime()
			]);
		}
	}

}