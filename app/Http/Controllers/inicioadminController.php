<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use App\Curso;

class inicioadminController extends Controller
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
        $cursos = Curso::all();
        return view('Inside.Administrador.inicio')->with('cursos', $cursos);
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
        $cursito = new Curso;
        $cursito->fecha_inicio = $request->input('date');
        $cursito->nombre_curso = $request->input('name');
        $cursito->calificacion_aprobatoria = $request->input('amount');
        $cursito->cupo_maximo = $request->input('tax');
        $cursito->cantidad_sesiones = $request->input('total');
        $cursito->estado = $request->input('note');
        $cursito->save();

        return view('Inside.Administrador.analitica');
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
        Auth::logout();
        
        if(Auth::check()){
            return ('Validado aun');
        }
        else{
            return view('/');
        }
        
        
    }


}
