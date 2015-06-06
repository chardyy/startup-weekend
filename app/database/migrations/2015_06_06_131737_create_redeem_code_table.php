<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedeemCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('redeem_code', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('promo_redeem_id')->unsigned();
			$table->string('promo_code');
			$table->timestamps();
		});

		Schema::table('redeem_code', function($table){
			$table->foreign('promo_redeem_id')->references('id')->on('promo_redeem');
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
