<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillPacketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_packet', function (Blueprint $table) {
          $table->char('bill_id', 36);
          $table->char('packet_id', 36);
          $table->integer('quantity')->unsigned()->default(1);
          $table->decimal('price', 10);
          $table->decimal('subtotal', 12);
          $table->decimal('discount', 10);
          $table->dateTime('start_date');
          $table->dateTime('until_date');
          $table->string('info')->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

          $table->foreign('bill_id')->references('id')->on('bills')->onDelete('cascade');
          $table->foreign('packet_id')->references('id')->on('packets')->onDelete('cascade');
          $table->primary(array('bill_id', 'packet_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_packet');
    }
}
