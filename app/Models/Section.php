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

}
