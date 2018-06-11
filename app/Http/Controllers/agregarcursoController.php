<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Curso;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Sala;
use App\inscripcion;


class agregarcursoController extends Controller
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

        $cursos = curso::all();
        $instructores = InstructUser::all();
        $salas = Sala::all();
        $inscripciones = inscripcion::all();
        $usuarioID = Session::get('usuarioID');
        return view('Inside.Empleados.agregarcurso')->with('cursos', $cursos)
        ->with('instructores', $instructores)->with('salas', $salas)->with('inscripciones', $inscripciones)
        ->with('usuarioID', $usuarioID);
    }

    public function inscripcion($id){
        
        if(Session::has('usuarioID')){
            
            $idaguardar = Session::get('usuarioID');
            $cursoinscrito = new inscripcion;
            $cursoinscrito->empleado_id = $idaguardar;
            $cursoinscrito->curso_id = $id;
            $cursoinscrito->save();
            return redirect()->intended('/inicioemp');
        }
        
    }

    public function logout()
    {
        Session::flush();
        if(Session::has('usuarioID'))
        {
            return ('Sigue validado');
        }
        else{
            return redirect()->intended('/');
        }   
        
        
    }
}
