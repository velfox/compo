<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    public function competition(){
        return $this->belongsTo(Competition::class, 'competition_id');
    }
}
