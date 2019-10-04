<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPengumumanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pengumuman', function(Blueprint $table)
		{
			$table->foreign('users_id', 'fk_kategori_users00')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('kategori_pengumuman_id', 'fk_pengumuman_kategori_pengumuman1')->references('id')->on('kategori_pengumuman')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pengumuman', function(Blueprint $table)
		{
			$table->dropForeign('fk_kategori_users00');
			$table->dropForeign('fk_pengumuman_kategori_pengumuman1');
		});
	}

}
