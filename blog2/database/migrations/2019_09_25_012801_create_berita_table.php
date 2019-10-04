<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeritaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('berita', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->text('isi', 65535)->nullable();
			$table->bigInteger('users_id')->unsigned()->index('fk_kategori_users_idx');
			$table->timestamps();
			$table->integer('kategori_berita_id')->unsigned()->index('fk_berita_kategori_berita1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('berita');
	}

}
