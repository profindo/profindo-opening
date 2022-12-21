<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $connection = "api";
    protected $table = "districts";
    protected $primaryKey = "dis_id";

    public function getId()
    {
        return $this->dis_id;
    }

    public function getName()
    {
        return $this->dis_name;
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function subdistrict()
    {
        return $this->hasMany(Subdistrict::class, 'dis_id');
    }
}
