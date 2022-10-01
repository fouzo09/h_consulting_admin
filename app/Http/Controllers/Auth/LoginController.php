<?php

namespace App\Http\Controllers\Auth;

use App\User;
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

        $user = User::where('email',$email)->first();
        //dd($user->role_id);

        if (Auth::attempt($authent)){

            if ($user->role_id == 1){

                return redirect()->route('dashboard')
                                 ->with('info','Bienvenue dans la partie administration de Hconsulting');

            }else{

                return redirect()->route('home');
            }

        }else{

            return back()->with('error',"Nom d'utilisateur ou Mot de passe incorrecte");

        }

    }

    function logout()
    {
        $this->guard()->logout();
    }
}
