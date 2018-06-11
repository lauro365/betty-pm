<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Curso;
use App\Sala;

class inicioadminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
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
        $salas = Sala::all();

        return view('Inside.Administrador.inicio')->with('cursos', $cursos)
        ->with('instructores', $instructores)
        ->with('salas', $salas);
        //return view('Inside.Administrador.inicio');
    }

    /**
     * Show the form formc creating a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){

        $año = $request->input('año');
        $mes = $request->input('mes');
        $dia = $request->input('dia');

        $fecha = $año.$mes.$dia;

        $cursito = new Curso;
        $cursito->fecha_inicio = $fecha;
        $cursito->año = $año;
        $cursito->mes = $mes;
        $cursito->dia = $dia;
        $cursito->nombre_curso = $request->input('name');
        $cursito->calificacion_aprobatoria = $request->input('amount');
        $cursito->cupo_maximo = $request->input('tax');
        $cursito->cantidad_sesiones = '40';
        $cursito->sala_id = $request->input('sala');
        $cursito->instruct_id = $request->input('instructor'); 
        $cursito->save();
        


        return redirect()->intended('/inicioadmin');
    }

    /**
     * Show the form for editing the specified resource
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id){
         //
     }
     /**
      * Update the specified resource in storage
      * 
      *@param \Illuminate\Http\Request $request
      *@param int $id
      *@return \Illuminate\Http\Response
      */

      public function update(Request $request, $id){
          //
      }

      /**
       * Remove the specified resource from storage
       * 
       * @param int $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id){
          //
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
