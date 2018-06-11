<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sala;
use App\Curso;

class salasController extends Controller
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

        $salas = Sala::all();
        $salaselegidas = 0;
        return view('Inside.Administrador.salas')->with('salas', $salas)->with('salaselegidas', $salaselegidas);
    }

    public function salatime($id)
    {
        $cursos = Curso::all();
        $salaselegidas = Sala::find($id);
        //return ($salaselegidas);
        return view('Inside.Administrador.salaelegida')->with('salaselegidas', $salaselegidas)
        ->with('cursos', $cursos);
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
