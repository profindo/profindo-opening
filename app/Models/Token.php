<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $table = "user_token";

    protected $fillable = [
        'user_id',
        'token',
    ];

    function investor()
    {
        return $this->belongsTo(Investor::class, 'user_id');
    }
}
