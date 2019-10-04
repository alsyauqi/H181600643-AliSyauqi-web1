<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArtikelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('artikel', function(Blueprint $table)
		{
			$table->foreign('kategori_artikel_id', 'fk_artikel_kategori_artikel1')->references('id')->on('kategori_artikel')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_kategori_users0')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('artikel', function(Blueprint $table)
		{
			$table->dropForeign('fk_artikel_kategori_artikel1');
			$table->dropForeign('fk_kategori_users0');
		});
	}

}
