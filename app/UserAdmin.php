<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class UserAdmin extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $guard = 'UserAdmin';

    public function curso(){
        return $this->hasMany('App\Curso');
    }


    
}
