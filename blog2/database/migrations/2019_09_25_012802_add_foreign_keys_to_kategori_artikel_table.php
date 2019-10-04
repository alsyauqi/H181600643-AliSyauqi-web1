<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKategoriArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kategori_artikel', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_kategori_users')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kategori_artikel', function(Blueprint $table)
		{
			$table->dropForeign('fk_kategori_users');
		});
	}

}
