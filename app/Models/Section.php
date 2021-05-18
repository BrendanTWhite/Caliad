<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;


    public function session()
    {
        return $this->belongsTo(Session::class);
    }


    public function routines()
    {
        return $this->hasMany(Routine::class);
    }    





    public function divisions()
    {
        return $this->belongsToMany(Division::class);
    }  
    public function team_rank()
    {
        return $this->belongsToMany(TeamRank::class);
    }  
    public function region()
    {
        return $this->belongsToMany(Region::class);
    }  
    public function item()
    {
        return $this->belongsToMany(Item::class);
    }  
    public function age_group()
    {
        return $this->belongsToMany(AgeGroup::class);
    }  


}
