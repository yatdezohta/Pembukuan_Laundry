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
        Schema::create('harga__laundries', function (Blueprint $table) {
          $table->bigIncrements('id_detLaundry');
          $table->string('nama_laundry');
          $table->string('unit');
          $table->unsignedBigInteger('id_tipe_laundry');
          $table->integer('harga');
          $table->unsignedBigInteger('user_id');
          $table->timestamps();

          $table->foreign('id_tipe_laundry')->references('id_tipe')->on('tipe__laundries');
          $table->foreign('user_id')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga__laundries');
    }
}
