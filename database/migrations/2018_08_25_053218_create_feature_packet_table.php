<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturePacketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_packet', function (Blueprint $table) {
          $table->char('feature_id', 36);
          $table->char('packet_id', 36);
          $table->timestamps();

          $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
          $table->foreign('packet_id')->references('id')->on('packets')->onDelete('cascade');
          $table->primary(array('feature_id', 'packet_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feature_packet');
    }
}
