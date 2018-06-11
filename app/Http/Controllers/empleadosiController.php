<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Curso;
use App\Sala;
use App\inscripcion;

class empleadosiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *//*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        $empleados = Empleado::all();
        $inscritos = inscripcion::all();
        $usuarioID = Session::get('usuarioID');
        return view('Inside.Instructor.empleados')->with('cursos', $cursos)->with('empleados', $empleados)
        ->with('inscritos', $inscritos)->with('usuarioID', $usuarioID);
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
