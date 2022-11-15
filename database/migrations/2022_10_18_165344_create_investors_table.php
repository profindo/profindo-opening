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
            $table->string('telp');
            $table->string('gender');
            $table->string('nationality');
            $table->string('relationship_status');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('nik_no');
            $table->date('nik_expire');
            $table->string('npwp');
            
            $table->string('address_ktp_jalan');
            $table->string('address_ktp_rtrw');
            $table->string('address_ktp_provinsi');
            $table->string('address_ktp_kota');
            $table->string('address_ktp_kecamatan');
            $table->string('address_ktp_kelurahan');
            $table->string('address_ktp_kodepos');
            $table->string('address_home_jalan');
            $table->string('address_home_rtrw');
            $table->string('address_home_provinsi');
            $table->string('address_home_kota');
            $table->string('address_home_kecamatan');
            $table->string('address_home_kelurahan');
            $table->string('address_home_kodepos');
            $table->string('address_inheritor_jalan');
            $table->string('address_inheritor_rtrw');
            $table->string('address_inheritor_provinsi');
            $table->string('address_inheritor_kota');
            $table->string('address_inheritor_kecamatan');
            $table->string('address_inheritor_kelurahan');
            $table->string('address_inheritor_kodepos');
            $table->string('adress_company_jalan');
            $table->string('address_company_rtrw');
            $table->string('address_company_provinsi');
            $table->string('address_company_kota');
            $table->string('address_company_kecamatan');
            $table->string('address_company_kelurahan');
            $table->string('address_company_kodepos');

            $table->string('mother_name');
            $table->string('inheritor_name');
            $table->string('inheritor_telp');
            $table->string('inheritor_relationship');
            $table->string('inheritor_status');

            $table->string('occupation_profession');
            $table->string('occupation_position');
            $table->string('occupation_income');
            $table->string('occupation_source');
            $table->string('company_name');
            $table->string('company_industry');
            $table->string('company_telp');
            $table->string('company_fax');
            
            $table->string('media_ktp');
            $table->string('media_npwp');
            $table->string('media_signature');
            $table->string('media_selfie');
            $table->string('referral');
            $table->string('where_do_you_know');
            $table->string('reason');
            $table->string('is_occupation_related');
            $table->string('other_securities_company');
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
