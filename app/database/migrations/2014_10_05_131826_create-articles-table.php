<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table) {
         $table->increments('id')->unsigned;
         $table->string('title',128)->unsigned;
         $table->string('user_id')->unsigned;
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
         $table->string('article_id')->unsigned;
         $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade')->onUpdate('cascade');
         $table->text('text');
         $table->timestamps();
       });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
