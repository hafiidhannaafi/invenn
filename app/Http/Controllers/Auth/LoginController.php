<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        
        {

            if (auth()->user()->roles_id == 1 && auth()->user()->status == 1) 
             {
                return redirect()->route('data-admin');

            } elseif (auth()->user()->roles_id == 1 && auth()->user()->status == 0) {
                (auth()->logout());
            
            }  elseif (auth()->user()->roles_id == 2 && auth()->user()->status == 1) {
                return redirect()->route('data-kepala');

            } elseif (auth()->user()->roles_id == 2 && auth()->user()->status == 0) {
                (auth()->logout());

            //  }  elseif (auth()->user()->roles_id == 3 && auth()->user()->status == 1) {
            //     return redirect()->route('datauser');

            // } elseif (auth()->user()->roles_id == 3 && auth()->user()->status == 0) {
            //     (auth()->logout());

        } else 
        {
            return redirect()->route('login')->with('error', 'Email and password are wrong');
        }
    }
}
}