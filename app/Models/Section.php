<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;


    public function description() 
    {
        
        $text = collect([]);  // start with an empty collection
        
        // want age group(s), division(s), team rank(s)
        
        if ($this->age_groups) {
            $text->push($this->age_groups->implode('name', ' & '));
        }

        if ($this->items) {
            $text->push($this->items->implode('name', ' & '));
        }

        if ($this->divisions) {
            $text->push($this->divisions->implode('full_name', ' & '));
        }

        if ($this->team_ranks) {
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
