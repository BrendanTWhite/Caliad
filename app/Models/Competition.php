<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;



    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }


    protected $dates = [
        'start_date',
        'end_date'
    ];

}
