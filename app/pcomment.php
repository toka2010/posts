<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pcomment extends Model
{
    //
    public function ppost(){
    	return $this->belongsTo("App\ppost");
    }
    public function user(){
    	return $this->belongsTo("App\User");
    }
}
