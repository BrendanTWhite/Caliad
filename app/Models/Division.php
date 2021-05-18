<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;


    
    public function cohorts()
    {
        return $this->hasMany(Cohort::class);
    }  


    public function competition()
    {
        return $this->belongsToMany(Competition::class);
    }  
    public function session()
    {
        return $this->belongsToMany(Session::class);
    }  
    public function section()
    {
        return $this->belongsToMany(Section::class);
    }  

}
