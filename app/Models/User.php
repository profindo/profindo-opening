<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;

    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'investor_id'
    ];

    function investor()
    {
        return $this->hasOne(Investor::class, 'investor_id');
    }

    function token()
    {
        return $this->hasOne(Token::class, 'user_id')->latestOfMany();
    }
}
