<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\inscripcion;
use App\Curso;
use App\Sala;
use DB;

class miscursosController extends Controller
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
        $inscripciones = inscripcion::all();
        $cursos = Curso::all();
        $instructores = InstructUser::all();
        $usuarioID = Session::get('usuarioID');
        $salas = Sala::all();
        return view('Inside.Empleados.miscursos')->with('inscripciones', $inscripciones)
        ->with('cursos', $cursos)->with('instructores', $instructores)->with('usuarioID', $usuarioID)
        ->with('salas', $salas);
    }

    public function borrar($id){
        $uID = Session::get('usuarioID');
        $rs = DB::table('inscripcion')->where('empleado_id', '=', $uID)->where('curso_id', '=', $id)->value('id');
        //$idcurso = $rs->id;
        $iab = inscripcion::find($rs);
        $iab->delete();
        return redirect()->intended('/inicioemp');
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
