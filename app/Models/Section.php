<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;


    public function getDescriptionAttribute()
    {

        $text = collect([]);  // start with an empty collection

        // want age group(s), item(s), division(s), team rank(s)

        if ($this->age_groups->isNotEmpty()) {
            $text->push($this->age_groups->implode('name', ' & '));
        }

        if ($this->items->isNotEmpty()) {
            $text->push($this->items->implode('full_name', ' & '));
        }

        if ($this->divisions->isNotEmpty()) {
            $text->push($this->divisions->implode('full_name', ' & '));
        }

        if ($this->team_ranks->isNotEmpty()) {
            $text->push('Team ' . $this->team_ranks->implode('id', ' & '));
        }

        return $text->implode(', ');
    }


    protected $fillable = ['session_id', 'sequence'];



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
    public function team_ranks()
    {
        return $this->belongsToMany(TeamRank::class);
    }
    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class);
    }
    public function age_groups()
    {
        return $this->belongsToMany(AgeGroup::class);
    }
}
