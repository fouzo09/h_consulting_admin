<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
