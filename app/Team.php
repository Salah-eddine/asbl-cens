<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function inscriptions(){
        return $this->hasMany("App\Inscription","team_id","id");
    }
}
