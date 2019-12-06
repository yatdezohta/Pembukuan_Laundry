<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail__transaksis', function (Blueprint $table) {
                      $table->bigIncrements('id_detTransaksi');
                      $table->unsignedBigInteger('id_transaksi');
                      $table->unsignedBigInteger('id_harga_laundry');
                      $table->unsignedBigInteger('id_tipe_laundry');
                      $table->timestamps();

                      $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksis');
                      $table->foreign('id_harga_laundry')->references('id_detLaundry')->on('det__laundries');
                      $table->foreign('id_tipe_laundry')->references('id_tipe')->on('tipe__laundries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail__transaksis');
    }
}
