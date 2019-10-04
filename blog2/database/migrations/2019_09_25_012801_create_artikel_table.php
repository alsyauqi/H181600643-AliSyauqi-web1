<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikel', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->text('isi', 65535)->nullable();
			$table->bigInteger('users_id')->unsigned()->index('fk_kategori_users_idx');
			$table->timestamps();
			$table->integer('kategori_artikel_id')->unsigned()->index('fk_artikel_kategori_artikel1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artikel');
	}

}
