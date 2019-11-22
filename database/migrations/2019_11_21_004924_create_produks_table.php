<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->bigInteger('unit_id');
            $table->bigInteger('curr_id');
            $table->float('harga_jual');
            $table->float('harga_beli');
            $table->integer('disc');
            $table->integer('stok');
            $table->string('barcode');
            $table->bigInteger('kategori_id');
            $table->text('ket')->nullable();
            $table->string('laba')->nullable();
            $table->string('ppn')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
