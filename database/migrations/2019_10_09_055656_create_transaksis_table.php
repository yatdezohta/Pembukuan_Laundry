<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
       $table->bigIncrements('id_transaksi');
       $table->string('invoice');
       $table->unsignedBigInteger('customer_id');
       $table->unsignedBigInteger('detLaundry_id');
       $table->integer('total_kilo');
       $table->date('start_date');
       $table->date('end_date');
       $table->boolean('status')->default(false);
       $table->integer('total');
       $table->timestamps();

       $table->foreign('customer_id')->references('id_cust')->on('customers');
       $table->foreign('detLaundry_id')->references('id_detLaundry')->on('det__laundries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
