<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    protected $dates = [
        'start',
        'end'
    ];
    
    protected $fillable = [
        'section_id', 
        'team_id', 
        'item_id', 
        'sequence', 
        'music_title', 
    ];


    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
