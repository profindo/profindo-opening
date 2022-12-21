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
            
            $table->string('address_ktp_road')->nullable();
            $table->string('address_ktp_unit')->nullable();
            $table->string('address_ktp_province')->nullable();
            $table->string('address_ktp_city')->nullable();
            $table->string('address_ktp_district')->nullable();
            $table->string('address_ktp_subdistrict')->nullable();
            $table->string('address_ktp_postal')->nullable();
            $table->string('address_home_road')->nullable();
            $table->string('address_home_unit')->nullable();
            $table->string('address_home_province')->nullable();
            $table->string('address_home_city')->nullable();
            $table->string('address_home_district')->nullable();
            $table->string('address_home_subdistrict')->nullable();
            $table->string('address_home_postal')->nullable();
            $table->string('address_home_status')->nullable();
            $table->string('address_inheritor_road')->nullable();
            $table->string('address_inheritor_unit')->nullable();
            $table->string('address_inheritor_province')->nullable();
            $table->string('address_inheritor_city')->nullable();
            $table->string('address_inheritor_district')->nullable();
            $table->string('address_inheritor_subdistrict')->nullable();
            $table->string('address_inheritor_postal')->nullable();
            $table->string('address_company_road')->nullable();
            $table->string('address_company_unit')->nullable();
            $table->string('address_company_province')->nullable();
            $table->string('address_company_city')->nullable();
            $table->string('address_company_district')->nullable();
            $table->string('address_company_subdistrict')->nullable();
            $table->string('address_company_postal')->nullable();

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
