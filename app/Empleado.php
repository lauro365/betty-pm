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
        return $this->belongsToMany('App\Curso', 'asist_table')
        ->withPivot('calificacion', 'hora_asistencia')
        ->as('asistencia');
    }

    public function cursoinsc(){
        return $this->belongsToMany('App\Curso', 'insc_table')->as('inscripcion');
    }
}
