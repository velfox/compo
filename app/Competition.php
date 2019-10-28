<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $guarded = [];

    public function results(){
        return $this->hasMany(Results::class);
    }

    public function summoner(){
        return $this->hasMany(summoner::class);
    }

}
