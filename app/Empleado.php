<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Empleado extends Model implements AuthenticatableContract
{

    use Authenticatable;
    protected $guard = 'Empleado';

    public function cursoasist(){
        return $this->belongsToMany('App\Curso', 'asistencia')
        ->withPivot('calificacion', 'hora_asistencia');
    }

    public function cursoinsc(){
        return $this->belongsToMany('App\Curso', 'inscripcion');
    }
}
