<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
          $table->uuid('id');
          $table->string('company_name', 30);
          $table->string('address', 100);
          $table->string('phone_number', 15);
          $table->string('city', 15);
          $table->string('province', 15);
          $table->string('email',50)->nullable();
          $table->string('cp_name', 30)->nullable();
          $table->string('cp_phone_number', 15)->nullable();
          $table->string('cp_email',50)->nullable();
          $table->string('bank_account_number',50);
          $table->string('bank_account_name', 50);
          $table->string('bank_branch', 50);
          $table->string('db_name', 20);
          $table->text('directory');
          $table->decimal('cash_balance', 12)->default(0);
          $table->decimal('sms_balance', 12)->default(0);
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
        Schema::dropIfExists('clinics');
    }
}
