<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = [
        'club_id',
        'age_group_id',
        'year_id',
        'division_id',
    ];


    public function club()
    {
        return $this->belongsTo(Club::class);
    }



    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function age_group()
    {
        return $this->belongsTo(AgeGroup::class);
    }




    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
