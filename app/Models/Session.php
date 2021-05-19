<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Collection;

class Session extends Model
{
    use HasFactory;

    protected $dates = [
        'start',
    ];


    public function description() 
    {
        if ($this->name) { 
            return $this->name;
        } else {

            $text = '';
            
            // want age group(s), division(s), team rank(s)
            
            if ($this->age_groups) {
                $text .= $this->age_groups->unique->get()->implode('name', ', ')
                    .' ';
            }

            if ($this->divisions) {
                $text .= $this->divisions->unique->get()->implode('full_name', ', ')
                    .' ';
            }

            if ($this->team_ranks) {
                $text .= 'Team ' . $this->team_ranks->unique->get()->implode('id', ', ')
                    .' ';
            }

            return $text;
        }
    }




    protected $fillable = ['start', 'competition_id'];


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
