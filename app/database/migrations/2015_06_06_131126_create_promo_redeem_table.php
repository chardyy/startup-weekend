<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoRedeemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promo_redeem', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('promo_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('promo_redeem', function($table){
			$table->foreign('promo_id')->references('id')->on('promos');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promo_redeem');
	}

}
