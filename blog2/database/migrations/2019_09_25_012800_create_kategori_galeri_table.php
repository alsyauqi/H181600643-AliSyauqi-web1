<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKategoriGaleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kategori_galeri', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->bigInteger('users_id')->unsigned()->index('fk_kategori_galeri_users_idx');
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
		Schema::drop('kategori_galeri');
	}

}
