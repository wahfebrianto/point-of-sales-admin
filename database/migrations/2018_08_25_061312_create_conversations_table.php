<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
          $table->uuid('id');
          $table->dateTime('conversation_date');
          $table->string('sender', 50);
          $table->text('content');
          $table->char('support_id', 36);
          $table->string('info')->nullable();
          $table->boolean('status')->nullable();
          $table->timestamps();

          $table->primary('id');
          $table->foreign('support_id')->references('id')->on('supports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversations');
    }
}
