<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PromosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$userIds = User::lists('id');
		$categoryIds = Category::lists('id');

		foreach(range(1, 10) as $index)
		{
			Promo::create([
				'name' => $faker->name,
				'details' => $faker->sentence,
				'image' => $faker->imageUrl($width = 640, $height = 480),
				'category_id' => $faker->randomElement($categoryIds),	
				'user_id' => $faker->randomElement($userIds),
				'created_at' => $faker->dateTime()
			]);
		}
	}

}