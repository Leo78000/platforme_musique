<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as SimpleAuthenticatable;


class Organisateur extends Model implements Authenticatable
{
    use SimpleAuthenticatable;
    protected $fillable = ['name','email','password'];
}
