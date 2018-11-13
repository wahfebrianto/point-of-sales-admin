<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
          $table->uuid('id');
          $table->dateTime('support_date');
          $table->string('subject', 50);
          $table->char('clinic_id', 36);
          $table->string('info')->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

          $table->foreign('clinic_id')->references('id')->on('clinics');
          $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supports');
    }
}
