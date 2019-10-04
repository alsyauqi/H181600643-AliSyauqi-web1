<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galeri', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->text('keterangan', 65535)->nullable();
            $table->string('path');
			$table->bigInteger('users_id')->unsigned()->index('fk_galeri_users_idx');
			$table->timestamps();
			$table->integer('kategori_galeri_id')->unsigned()->index('fk_galeri_kategori_berita1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('galeri');
	}

}
