<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Curso;
use App\Sala;



class catalogoiController extends Controller
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
        $instructores = InstructUser::all();
        return view('Inside.Administrador.catalogoi')->with('instructores', $instructores)
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
