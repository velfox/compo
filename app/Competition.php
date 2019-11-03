<?php

namespace App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Mail\CompoCreated;

class Competition extends Model
{
    protected $guarded = [];

    protected static function boot(){
        parent::boot();
        static::created(function ($compo){
            \Mail::to($compo->owner->email)->send(new CompoCreated($compo));
        });
    }

    public function results(){
        return $this->hasMany(Results::class);
    }

    public function summoner(){
        return $this->hasMany(summoner::class);
    }

    public function owner(){
        return $this->belongsTo(User::class);
    }


    
}
