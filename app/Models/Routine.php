<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;


    public function getCanRecordStartAttribute(): bool {

        /* 

        TODO: need to check:
        Is logged in?
        User has permissions to do this thing?
        Is it reasonable to do this thing now - that is, has a later item already started?


        Until we do all that, though...
        ...just return false so they can't do nuttin

        */

        return false;

    }

    public function getCanRecordEndAttribute(): bool {

        // TODO: see above

        // return false for now

        return false;

    }

    public function getCanClearStartAttribute(): bool {

        // TODO: see above

        // return false for now

        return false;

    }

    public function getCanClearEndAttribute(): bool {

        // TODO: see above

        // return false for now

        return false;

    }


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
