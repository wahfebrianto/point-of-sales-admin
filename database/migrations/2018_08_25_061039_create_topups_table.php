<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topups', function (Blueprint $table) {
          $table->uuid('id');
          $table->dateTime('topup_date');
          $table->decimal('total', 12);
          $table->string('method', 20);
          $table->text('proof_link');
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
        Schema::dropIfExists('topups');
    }
}
