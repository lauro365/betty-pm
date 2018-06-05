<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Curso;

class agregarcursoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cursos = curso::all();
        return view('Inside.Empleados.agregarcurso')->with('cursos', $cursos);
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
