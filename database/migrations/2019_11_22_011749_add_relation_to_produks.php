<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationToProduks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->bigInteger('unit_id')->unsigned()->change();
            $table->foreign('unit_id')->references('id')->on('master_units')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('curr_id')->unsigned()->change();
            $table->foreign('curr_id')->references('id')->on('master_currs')->onUpdate('cascade')->onDelete('cascade');

            $table->bigInteger('kategori_id')->unsigned()->change();
            $table->foreign('kategori_id')->references('id')->on('master_kats')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->dropForeign('master_units_unit_id_foreign');
            $table->dropIndex('master_units_unit_id_foreign');
            $table->bigInteger('unit_id')->change();

            $table->dropForeign('master_currs_curr_id_foreign');
            $table->dropIndex('master_currs_curr_id_foreign');
            $table->bigInteger('curr_id')->change();

            $table->dropForeign('master_kats_kategori_id_foreign');
            $table->dropIndex('master_kats_kategori_id_foreign');
            $table->bigInteger('kategori_id')->change();
        });
    }
}
