<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
          $table->uuid('id');
          $table->string('name',50);
          $table->string('display_name',50);
          $table->string('description', 200)->default('');
          $table->string('icon',50);
          $table->char('parent_menu',36)->nullable();
          $table->char('feature_id', 36);
          $table->string('info')->default('');
          $table->boolean('status')->default(1);
          $table->timestamps();

          $table->primary('id');
          $table->foreign('parent_menu')->references('id')->on('menus')->onDelete('cascade');
          $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('menus', function(Blueprint $table)
        // {
        //     $table->dropForeign('parent_menu');
        //     $table->dropForeign('feature_id');
        // });

        Schema::dropIfExists('menus');
    }
}
