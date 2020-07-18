<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function pposts(){
    	return $this->hasMany("App\ppost");
    }
}
