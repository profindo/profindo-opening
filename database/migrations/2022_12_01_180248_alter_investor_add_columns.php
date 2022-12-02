<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investors', function(Blueprint $table) {
            $table->string('religion', 40);
            $table->string('partner_name', 40)->nullable();
            $table->string('partner_phone', 10)->nullable();
            $table->string('partner_relationship')->nullable();

            $table->text('address_partner_road')->nullable();
            $table->text('address_partner_unit')->nullable();
            $table->text('address_partner_subdistrict')->nullable();
            $table->text('address_partner_district')->nullable();
            $table->text('address_partner_city')->nullable();
            $table->text('address_partner_province')->nullable();
            $table->string('address_partner_postal', 10)->nullable();

            $table->string('partner_profession', 40)->nullable();
            $table->string('partner_position', 40)->nullable();
            $table->text('partner_company_name')->nullable();
            $table->text('partner_company_address')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investors', function(Blueprint $table) {
            $table->dropColumn([
                'religion', 'partner_name', 'partner_phone', 'partner_relationship',
                'address_partner_road', 'address_partner_unit', 'address_partner_subdistrict', 'address_partner_district', 'address_partner_city', 'address_partner_province', 'address_partner_postal',
                'partner_profession', 'partner_position', 'partner_company_name', 'partner_company_address',
            ]);
        });
    }
};
