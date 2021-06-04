<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;



    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function cohorts()
    {
        return $this->hasMany(Cohort::class);
    }
}
