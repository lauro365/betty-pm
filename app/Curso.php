<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function user_admins(){
        return $this->belongsTo('App\UserAdmin');
    }

    public function salas(){
        return $this->belongsTo('App\Sala');
    }

    public function empleadoasist(){
        return $this->belongsToMany('App\Empleado', 'asistencia')
        ->withPivot('calificacion', 'hora_asistencia');
    }

    public function empleadoinsc(){
        return $this->belongsToMany('App\Empleado', 'inscripcion');
    }

    public function instruct_users(){
        return $this->belongsTo('App\InstructUser');
    }
}
