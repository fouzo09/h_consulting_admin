<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->check('view_all_users');
        $users = User::all();
        $title = 'liste des utilisateurs';
        return view('users.liste',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'firstName'   => 'required|min:2|string',
            'lastName' => 'required|min:2|string',
            'phone' => 'required|min:9|string',
            'role_id' => 'required',
            'email'  => 'required|email|unique:users|max:255'
        ];

        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];

        $this->validate(request(), $rules, $customMessages);

            $user = new User();


            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->role_id   = $request->role_id;
            if($user->save()){
                return redirect(route('list.users'))->with('success', 'Ajout avec success') ;
            }else{
            return back()->with('error', "Erreur! lors de l\'ajout de l'utilisateur");
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
        // $this->check('show_users');

        $user = User::findOrFail($id);
        return view('users.profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->check('edit_users');
         $user = User::findOrFail($id);
         return view('users.edit',compact('user'));
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
        // $this->check('edit_users');
        $rules = [
            'firstName'   => 'required|min:2|string',
            'lastName' => 'required|min:2|string',
            'phone' => 'required|min:9|string',
            'role_id' => 'required',
            'email'  => 'required|email|max:255'
        ];

        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];

        $this->validate(request(), $rules, $customMessages);
            $user = User::findOrFail($id);
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->role_id   = $request->role_id;
            if($user->update()){
                return redirect(route('list.users'))->with('success', 'Utilisateur modifié avec success') ;
            }else{
                return back()->with('error', "Erreur! lors de la modification de l'utilisateur")->with('roles','$roles');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->check('delete_user');
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect(route('list.users'))->with('success', 'Whoop!!! l\'utilisateur à été Supprimé avec succes');
        }else{
            return back()->with('error', "Whoop!!!,Erreur lors de la suppression de l\'utilisateur");
        }
    }

    public function disable($id)
    {
       // Helper::check('disable_user');
    //    $this->check('disable_users');
       $user = User::find($id);
        $user->status = !$user->status;
        $user->save();

        return redirect(route('users-list'));

    }

    public function updatePasswordForm()
    {
        $user = Auth::user();

        return view('auth.passwords.reset', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $rules = [

            'password' => 'required||min:8|confirmed',
      ];

        $request->validate($rules);

        $user = User::findOrFail($request->user_id);
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect(route('home'));
    }

    public function logout()
    {
        auth::logout();

        return redirect('login');
    }
}
