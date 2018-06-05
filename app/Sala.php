<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function curso(){
        return $this->hasMany('App\Curso');
    }
}
