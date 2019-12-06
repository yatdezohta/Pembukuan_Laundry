<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHargaLaundriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('det__laundries', function (Blueprint $table) {
          $table->bigIncrements('id_detLaundry');
          $table->string('kode_laundry');
          $table->string('nama_laundry');
          $table->string('jumlah_kilo');
          $table->unsignedBigInteger('id_tipe_laundry');
          $table->integer('harga');
          $table->timestamps();

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
        Schema::dropIfExists('det__laundries');
    }
}
