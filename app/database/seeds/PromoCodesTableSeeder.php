<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PromoCodesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$userIds = User::lists('id');
		$promoIds = Promo::lists('id');

		foreach(range(1, 10) as $index)
		{
			PromoCode::create([
				'code' => $faker->hexcolor,
				'user_id' => $faker->randomElement($userIds),
				'promo_id' => $faker->randomElement($promoIds)
			]);
		}
	}

}