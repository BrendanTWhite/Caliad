<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    public function item_type()
    {
        return $this->belongsTo(ItemType::class);
    }


    public function routines()
    {
        return $this->hasMany(Routine::class);
    }



    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }



    public function competition()
    {
        return $this->belongsToMany(Competition::class);
    }
    public function session()
    {
        return $this->belongsToMany(Session::class);
    }
    public function section()
    {
        return $this->belongsToMany(Section::class);
    }
}
