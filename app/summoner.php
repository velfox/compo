<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class summoner extends Model
{
    protected $guarded = [];

    public function owner(){
        return $this->belongsTo(User::class);
    }

}

