<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Investor extends Model
{
    use Notifiable;

    protected $table = "investors";

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        "name",
        "phone",
        "email",
        "gender",
        "nationality",
        "relationship_status",
        "birth_date",
        "birth_place",
        "nik_no",
        "nik_expire",
        "npwp",
        
        "address_ktp_jalan",
        "address_ktp_rtrw",
        "address_ktp_provinsi",
        "address_ktp_kota",
        "address_ktp_kecamatan",
        "address_ktp_kelurahan",
        "address_ktp_kodepos",
        "address_home_jalan",
        "address_home_rtrw",
        "address_home_provinsi",
        "address_home_kota",
        "address_home_kecamatan",
        "address_home_kelurahan",
        "address_home_kodepos",
        "address_home_status",
        "address_inheritor_jalan",
        "address_inheritor_rtrw",
        "address_inheritor_provinsi",
        "address_inheritor_kota",
        "address_inheritor_kecamatan",
        "address_inheritor_kelurahan",
        "address_inheritor_kodepos",
        "address_company_jalan",
        "address_company_rtrw",
        "address_company_provinsi",
        "address_company_kota",
        "address_company_kecamatan",
        "address_company_kelurahan",
        "address_company_kodepos",

        "mother_name",
        "inheritor_name",
        "inheritor_phone",
        "inheritor_relationship",

        "occupation_profession",
        "occupation_position",
        "occupation_income_range",
        "occupation_income_origin",
        "company_name",
        "company_industry",
        "company_phone",
        "company_fax",
        
        "media_ktp",
        "media_npwp",
        "media_signature",
        "media_selfie",
        "referral",
        "where_do_you_know",
        "reason",
        "is_occupation_related",
        "other_securities_company",
        "bank_name",
        "bank_no",
        "bank_code",
    ];
}
