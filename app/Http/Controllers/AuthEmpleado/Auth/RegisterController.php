<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * @return \App\Empleado
     * @return \App\UserAdmin
     * @return \App\InstructUser
     */
    protected function create(array $data)
    {
        switch($data->input('gender'))
        {
            case '0':
            // Create new usuario empleado
            return Empleado::create([
                'user' => $data['username'],
                'pass' => Hash::make($data['password']),
                'email' => $data['email'],
                'name' => $data['firstname'],
                'lastname' => $data['lastname'],
            ]);
            break;

            case '1':
            // Create new usuario Administrador
            return UserAdmin::create([
                'user' => $data['username'],
                'pass' => Hash::make($data['password']),
                'email' => $data['email'],
                'name' => $data['firstname'],
                'lastname' => $data['lastname'],
            ]);
            break;

            case '2':
            // Create new usuario Instructor
            return InstructUser::create([
                'user' => $data['username'],
                'pass' => Hash::make($data['password']),
                'email' => $data['email'],
                'name' => $data['firstname'],
                'lastname' => $data['lastname'],
            ]);


        }
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/
    }
}
