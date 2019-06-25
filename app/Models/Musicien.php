<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Musicien extends Model implements Authenticatable
{
    use BasicAuthenticatable;

    protected $fillable = ['name','first_name','email','password','city','instrument','birth_year'];
}
