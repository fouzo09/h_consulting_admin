<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\EmploiUser;
use App\Models\Emploi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserFrontController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.users.ConnexionInscriptionUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firsname'=>'required',
            'lastname'=>'required',
            'phone'=>'required | integer',
            'email'=>'required',
            'password'=>'required | min:6'
        ]);

        $confirmerPass = $request->conPassword;
        $password = $request->password;

        if($password == $confirmerPass){

            //enregistrement de l'utilisateur.
            User::create([
                'role_id'=>2,
                'firstName'=>$request->firsname,
                'lastName'=>$request->lastname,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'status'=>0
            ]);

            //la redirection vers
            return redirect()->route('user-connexion-inscription')
                             ->with('success','Inscription effectuée avec succès');
        }else{
            //Erreur au niveau du mot de passe.
            return redirect()->route('user-connexion-inscription')
                             ->with('error','Le mot de passe et la confirmation ne coincide pas');
        }

    }


    public function storeModal(Request $request){
        $request->validate([
            'firsname'=>'required',
            'lastname'=>'required',
            'phone'=>'required | integer',
            'email'=>'required',
            'password'=>'required | min:6'
        ]);

        $confirmerPass = $request->conPassword;
        $password      = $request->password;

        if($password == $confirmerPass){

            //enregistrement de l'utilisateur.
            User::create([
                'role_id'=>2,
                'firstName'=>$request->firsname,
                'lastName'=>$request->lastname,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'status'=>0
            ]);

            return redirect()->route('user-connexion-inscription')
                             ->with('success','Inscription effectuée avec succès');;
    }else{
         //Erreur au niveau du mot de passe.
         return redirect()->route('heuristic')
                          ->with('error','Le mot de passe et la confirmation ne coincide pas');
    }
}


    public function monCompte(){
        $user = User::find(Auth::User()->id);
       // $AppUserJob = EmploiUser::where('User_id',Auth::User()->id)->get();
        $postulant = Emploi::join('emploi_users', 'emploi_users.Emploi_id', '=', 'emplois.id')
                        ->where('emploi_users.User_id',Auth::User()->id)
                        ->select('emploi_users.*','emplois.titre','emplois.contenu')
                        ->get();
        return view('front.users.monCompte')->with(['postulant'=>$postulant,'user'=>$user]);
    }

    public function monProfile(Request $request){
        
        // verification des information à valider
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);
        // fin de la verification des informations

        //Mise à jour du Profile
        $profile = User::find(Auth::User()->id);
        $profile->update([
            'firstName'=>$request->firstName,
            'lastName'=>$request->lastName,
            'email'=>$request->email,
            'phone'=>$request->phone
        ]);
        //fin de la mise à jour du Profile.

        //la redirection de la page.
        return redirect()->route('monCompte')
                         ->with('success','Mise à jour du Profile effectué avec succès');
    }
}
