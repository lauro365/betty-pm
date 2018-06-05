<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function useradmin(){
        return $this->belongsTo('App\UserAdmin');
    }

    public function sala(){
        return $this->belongsTo('App\Sala');
    }

    public function empleadoasist(){
        return $this->belongsToMany('App\Empleado');
    }

    public function empleadoinsc(){
        return $this->belongsToMany('App\Empleado');
    }

    public function instructor(){
        return $this->belongsToMany('App\InstructUser');
    }
}
