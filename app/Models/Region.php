<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;



    public function clubs()
    {
        return $this->hasMany(Club::class);
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
