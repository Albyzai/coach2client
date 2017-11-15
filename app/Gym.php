<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    //
    public function gyms(){
        return $this->belongsToMany(User::class);
    }
}
