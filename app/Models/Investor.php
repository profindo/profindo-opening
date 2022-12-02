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
        "religion",
        "nationality",
        "relationship_status",
        "birth_date",
        "birth_place",
        "nik_no",
        "nik_expire",
        "npwp",
        
        "address_ktp_road",
        "address_ktp_unit",
        "address_ktp_province",
        "address_ktp_city",
        "address_ktp_district",
        "address_ktp_subdistrict",
        "address_ktp_postal",
        "address_home_road",
        "address_home_unit",
        "address_home_province",
        "address_home_city",
        "address_home_district",
        "address_home_subdistrict",
        "address_home_postal",
        "address_home_status",
        "address_inheritor_road",
        "address_inheritor_unit",
        "address_inheritor_province",
        "address_inheritor_city",
        "address_inheritor_district",
        "address_inheritor_subdistrict",
        "address_inheritor_postal",
        "address_company_road",
        "address_company_unit",
        "address_company_province",
        "address_company_city",
        "address_company_district",
        "address_company_subdistrict",
        "address_company_postal",

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

    public function addressKTP()
    {

    }

    public function addressHome()
    {

    }

    public function addressCompany()
    {

    }

    public function addressInheritor()
    {
        
    }
}
