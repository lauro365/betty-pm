<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
    public function authenticar(Request $request)
    {   
        $email = $request->input('email');
        $password = $request->input('password');
        $tipo = $request->input('gender');



        switch($tipo)
        {
            case "0":   //Authenticacion del empleado normal
            if($empleado = Empleado::where('email', '=', $email)->first()){
                if (Hash::check($password, $empleado->pass)){
                    Session::put('usuarioID', $empleado->id);
                    Session::put('usuarioNombre', $empleado->name);
                    Session::put('usuarioApellido', $empleado->lastname);   
                    //if(Auth::loginUsingId($empleado->id)){
                        return redirect()->intended('/inicioemp');
                    //}
                }
                else{
                    return redirect()->intended('/');
                }
            }
            else{
                return redirect()->intended('/');
            }

            
            break;

            case "1":   //Authenticacion del administrador
            if($admin = UserAdmin::where('email', '=', $email)->first()){
                if(Hash::check($password, $admin->pass))
                {
                Session::put('usuarioID', $admin->id);
                Session::put('usuarioNombre', $admin->name);
                Session::put('usuarioApellido', $admin->lastname);               

                    return redirect()->intended('/inicioadmin');
                }
                else{
                    return redirect()->intended('/');
                }
            }
            else{
                return redirect()->intended('/');
            }
            
            break;

            case "2":    //Authenticacion del Instructor
            if($instruct = InstructUser::where('email', '=', $email)->first()){
                if(Hash::check($password, $instruct->pass)){
                Session::put('usuarioID', $instruct->id);
                Session::put('usuarioNombre', $instruct->name);
                Session::put('usuarioApellido', $instruct->lastname);   
                    //if(Auth::loginUsingId($instruct->id)){
                        return redirect()->intended('/inicioi');
                    //}
                }
                else{
                    return redirect()->intended('/');
                }
            }
            else{
                return redirect()->intended('/');
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
