<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $connection = "api";
    protected $table = "cities";
    protected $primaryKey = "city_id";

    public function getId()
    {
        return $this->city_id;
    }

    public function getName()
    {
        return $this->city_name;
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'prov_id');
    }

    public function district()
    {
        return $this->hasmany(District::class, 'city_id');
    }
}
