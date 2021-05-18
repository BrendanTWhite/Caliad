<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    public function cohort()
    {
        return $this->belongsTo(Cohort::class);
    }

    public function team_rank()
    {
        return $this->belongsTo(TeamRank::class);
    }

    public function routines()
    {
        return $this->hasMany(Routine::class);
    }   



    public function items()
    {
        return $this->belongsToMany(Item::class);
    }     

}
