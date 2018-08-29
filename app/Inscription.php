<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    public function team(){
        return $this->belongsTo('App\Team','team_id','id');
    }
}
