<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function designation()
    {
        return $this->belongsTo(EmpDesignation::class,"empDesignation_id", "id");
    }
    public function department()
    {
        return $this->belongsTo(Department::class,"department_id","id");
    }


    // accessor
    //formert
    //get+arrtibuteName+Attribute
    public function getFullNameAttribute()
    {
        return $this->first_name ." ". $this->last_name;
    }

    

    //mutator 
    //set + arrttibuteName+ Attrubute($parameter)
    //return array 
    public function setFirstNameAttribute($value)
    {

        return $this->attributes['first_name']=ucfirst($value);

    }
    public function setLastNameAttribute($value)
    {
        return $this->attributes['last_name']=ucfirst($value);
    }


    public function setEmailAttribute($value)
    {

        return $this->attributes['email']=strtolower($value);

    }

}
