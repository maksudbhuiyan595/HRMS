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

}
