<?php

namespace App\Http\Controllers\AuthEmpleado;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:Empleado')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //Attempt to log the user empleado in
        if(Auth::guard('Empleado')->attempt($credential))
        {
            return redirect()->intended('dashboard');
        }

        //If unsuccessful, then redirect back to the default  login page  with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
