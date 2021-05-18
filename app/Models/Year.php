<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;



    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

    public function cohorts()
    {
        return $this->hasMany(Cohort::class);
    }  


}
