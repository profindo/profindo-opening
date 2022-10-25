<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('client_code');
            $table->string('ktp_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investor');
    }
}
