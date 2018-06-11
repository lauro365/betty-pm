<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Empleado;
use App\UserAdmin;
use App\InstructUser;
use DB;

class UserRegistration extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registro');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       switch($request->input('gender'))
       {
        case "0":
        // Create new usuario empleado
        $empleado = new empleado;
        $empleado->user = $request->input('username');
        $empleado->email = $request->input('email');
        $empleado->pass = Hash::make($request->input('password'));
        $empleado->name = $request->input('firstname');
        $empleado->lastname = $request->input('lastname');
        $empleado->save();

        Session::put('usuarioID', $empleado->id);
        Session::put('usuarioNombre', $empleado->name);
        Session::put('usuarioApellido', $empleado->lastname);   
        return redirect('/inicioemp');
        break;

        case "1":
        //Create new Administrador
        $admin = new useradmin;
        $admin->user = $request->input('username');
        $admin->email = $request->input('email');
        $admin->pass = Hash::make($request->input('password'));
        $admin->name = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->save();

        Session::put('usuarioID', $admin->id);
        Session::put('usuarioNombre', $admin->name);
        Session::put('usuarioApellido', $admin->lastname);   
        return redirect('/inicioadmin');
        break;

        case "2":
        //Create New Instructor
        $Instruct = new InstructUser;
        $Instruct->user = $request->input('username');
        $Instruct->email = $request->input('email');
        $Instruct->pass = Hash::make($request->input('password'));
        $Instruct->name = $request->input('firstname');
        $Instruct->lastname = $request->input('lastname');
        $Instruct->save();

        Session::put('usuarioID', $Instruct->id);
        Session::put('usuarioNombre', $Instruct->name);
        Session::put('usuarioApellido', $Instruct->lastname);   
        return redirect('/inicioi');
        break;
       }
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
