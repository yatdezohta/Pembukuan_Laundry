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
       $table->unsignedBigInteger('customer_id');
       $table->unsignedBigInteger('user_id');
       $table->integer('amount');
       $table->date('start_date');
       $table->date('end_date');
       $table->boolean('status')->default(false);
       $table->timestamps();

       $table->foreign('customer_id')->references('id_cust')->on('customers');
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
        Schema::dropIfExists('transaksis');
    }
}
