<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;

class LoginController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iniciodesesion');
    }
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $tipo = $request->input('gender');

        switch($tipo)
        {
            case "0":   //Authenticacion del empleado normal
            $empleado = Empleado::where('email', '=', $email)->first();

            if (Hash::check($password, $empleado->pass)){
                if(Auth::loginUsingId($empleado->id)){
                    return redirect()->intended('/inicioemp');
                }
            }
            else{
                return ('/');
            }
            break;

            case "1":   //Authenticacion del administrador
            $admin = UserAdmin::where('email', '=', $email)->first();
            if(Hash::check($password, $admin->pass)){
                if(Auth::loginUsingId($admin->id)){
                    return redirect()->intended('/inicioadmin');
                }
            }
            else{
                return ('/');
            }
            break;

            case "2":    //Authenticacion del Instructor
            $instruct = InstructUser::where('email', '=', $email)->first();
            if(Hash::check($password, $instruct->pass)){
                if(Auth::loginUsingId($instruct->id)){
                    return redirect()->intended('/inicioi');
                }
            }
            else{
                return ('/');
            }
            break;
        }

    }

    public function logout()
    {
        Auth::logout();
        
        if(Auth::check()){
            return ('Validado aun');
        }
        else{
            return view('/');
        }
        
        
    }
}
