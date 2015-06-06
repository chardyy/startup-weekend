<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoCodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promo_codes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('code');           
            $table->integer('user_id')->unsigned();
            $table->integer('promo_id')->unsigned();
			$table->timestamps();
		});

        Schema::table('promo_codes', function($table){
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('promo_id')->references('id')->on('promos');
        });
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promo_codes');
	}

}
