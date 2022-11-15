<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    use HasFactory;

    protected $connection = "api";
    protected $table = "subdistricts";
    protected $primaryKey = "subdis_id";

    public function getId()
    {
        return $this->subdis_id;
    }

    public function getName()
    {
        return $this->subdis_name;
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'dis_id');
    }
}
