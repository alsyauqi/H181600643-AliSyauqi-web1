<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKategoriArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategori_artikel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->bigInteger('users_id')->unsigned()->index('fk_kategori_users_idx');
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
		Schema::drop('kategori_artikel');
	}

}
