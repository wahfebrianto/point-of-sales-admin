<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packets', function (Blueprint $table) {
          $table->uuid('id');
          $table->string('name',50);
          $table->string('description', 200)->default('');
          $table->decimal('cost', 10);
          $table->string('category');
          $table->string('info')->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

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
        Schema::dropIfExists('packets');
    }
}
