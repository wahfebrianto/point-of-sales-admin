<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
          $table->uuid('id');
          $table->string('subject', 50);
          $table->text('content');
          $table->dateTime('message_date');
          $table->char('clinic_id', 36);
          $table->string('info')->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

          $table->foreign('clinic_id')->references('id')->on('clinics')->onDelete('cascade');
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
        Schema::dropIfExists('messages');
    }
}
