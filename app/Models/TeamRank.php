<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamRank extends Model
{
    use HasFactory;


    public function teams()
    {
        return $this->hasMany(Teams::class);
    }
     
}
