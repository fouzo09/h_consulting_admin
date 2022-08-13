<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function authenticated(Request $request,  $user)
    {
        if(!$user->status)
        {
            $this->guard()->logout();

            $request->session()->invalidate();

            return redirect('/login');
        }
    }

    public function login(Request $request){

        //validation des données
        $validate = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        //Authentification de l'utilisateur
        $email = $request->email;
        $password = $request->password;

        $authent = ['email'=>$email,'password'=>$password];

        if (Auth::attempt($authent)){

            dd('Authentification effectué avec succès');

        }else{

            return back()->with('error',"Nom d'utilisateur ou Mot de passe incorrecte");
            
        }

    }

    function logout()
    {
        $this->guard()->logout();
    }
}
