<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $dates = [
        'start_date',
        'end_date'
    ];




    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
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
