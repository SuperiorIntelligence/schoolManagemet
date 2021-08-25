<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Passport\HasApiTokens;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticateContract;

class Author extends Model implements AuthenticateContract
{
    use HasFactory , HasApiTokens , Authenticatable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_photo',
        'remember_token',
    ];

}
