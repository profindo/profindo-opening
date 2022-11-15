<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $connection = "api";
    protected $table = "provinces";
    protected $primaryKey = "prov_id";

    public function getId()
    {
        return $this->prov_id;
    }

    public function getName()
    {
        return $this->prov_name;
    }
    
    public function city()
    {
        return $this->hasMany(City::class, 'prov_id');
    }
}
