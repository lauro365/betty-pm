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

class inicioinstructorController extends Controller
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
        $salas = Sala::all();
        $usuarioID = Session::get('usuarioID');
        return view('Inside.Instructor.inicio')->with('cursos', $cursos)->with('usuarioID', $usuarioID)
        ->with('salas', $salas);
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
