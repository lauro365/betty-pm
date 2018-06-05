<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class miscursosiController extends Controller
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
        return view('Inside.Instructor.miscursos');
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
