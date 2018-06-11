<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class InstructUser extends Model implements AuthenticatableContract
{

    use Authenticatable;
    protected $guard = 'InstructUser';

    public function cursos(){
        return $this->hasMany('App\Curso');
    }
}
