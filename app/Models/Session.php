<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;


    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
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
