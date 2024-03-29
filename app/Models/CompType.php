<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompType extends Model
{
    use HasFactory;

    public function competitions()
    {
        return $this->hasMany(Competition::class);
    }

}
