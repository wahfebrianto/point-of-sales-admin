<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
          $table->uuid('id');
          $table->dateTime('bill_date');
          $table->decimal('surcharge', 10);
          $table->decimal('subtotal', 12);
          $table->decimal('total', 12);
          $table->integer('promo_id',false,true)->nullable();
          $table->char('clinic_id', 36);
          $table->string('info',100)->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

          $table->primary('id');
          $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
          $table->foreign('promo_id')->references('id')->on('promos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
