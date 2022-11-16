<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('relationship_status')->nullable();
            $table->string('birth_date');
            $table->string('birth_place')->nullable();
            $table->string('nik_no')->nullable();
            $table->date('nik_expire')->nullable();
            $table->string('npwp')->nullable();
            
            $table->string('address_ktp_jalan')->nullable();
            $table->string('address_ktp_rtrw')->nullable();
            $table->string('address_ktp_provinsi')->nullable();
            $table->string('address_ktp_kota')->nullable();
            $table->string('address_ktp_kecamatan')->nullable();
            $table->string('address_ktp_kelurahan')->nullable();
            $table->string('address_ktp_kodepos')->nullable();
            $table->string('address_home_jalan')->nullable();
            $table->string('address_home_rtrw')->nullable();
            $table->string('address_home_provinsi')->nullable();
            $table->string('address_home_kota')->nullable();
            $table->string('address_home_kecamatan')->nullable();
            $table->string('address_home_kelurahan')->nullable();
            $table->string('address_home_kodepos')->nullable();
            $table->string('address_home_status')->nullable();
            $table->string('address_inheritor_jalan')->nullable();
            $table->string('address_inheritor_rtrw')->nullable();
            $table->string('address_inheritor_provinsi')->nullable();
            $table->string('address_inheritor_kota')->nullable();
            $table->string('address_inheritor_kecamatan')->nullable();
            $table->string('address_inheritor_kelurahan')->nullable();
            $table->string('address_inheritor_kodepos')->nullable();
            $table->string('address_company_jalan')->nullable();
            $table->string('address_company_rtrw')->nullable();
            $table->string('address_company_provinsi')->nullable();
            $table->string('address_company_kota')->nullable();
            $table->string('address_company_kecamatan')->nullable();
            $table->string('address_company_kelurahan')->nullable();
            $table->string('address_company_kodepos')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('inheritor_name')->nullable();
            $table->string('inheritor_phone')->nullable();
            $table->string('inheritor_relationship')->nullable();

            $table->string('occupation_profession')->nullable();
            $table->string('occupation_position')->nullable();
            $table->string('occupation_income_range')->nullable();
            $table->string('occupation_income_origin')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_industry')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_fax')->nullable();
            
            $table->string('media_ktp')->nullable();
            $table->string('media_npwp')->nullable();
            $table->string('media_signature')->nullable();
            $table->string('media_selfie')->nullable();
            $table->string('referral')->nullable();
            $table->string('where_do_you_know')->nullable();
            $table->string('reason')->nullable();
            $table->string('is_occupation_related')->nullable();
            $table->string('other_securities_company')->nullable();
            $table->string('bank_name');
            $table->string('bank_no');
            $table->string('bank_code');

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
        Schema::dropIfExists('investors');
    }
}
