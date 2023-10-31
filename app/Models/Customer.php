<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];

    //accessor
    //get+fullName+Attributes
    public function getFullNameAttribute()
    {
        return $this->first_name ." ". $this->last_name;
    }

        //mutator

    public function setFirstNameAttribute($value)
    {
        $this->attributes["first_name"] = ucfirst($value);
    }
    public function setLastNameAttribute($value)
    {
        $this->attributes["last_name"] =ucfirst($value);
    }
    public function setEmailAttribute($value)
    {
        $this->attributes["email"] =strtolower($value);
    }
}
