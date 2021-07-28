<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use App\User;
use DB;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->check('view_all_role');
        $title = 'Liste des roles';
        $roles = Role::all();

        return view('roles.index',compact(['title','roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $this->check('create_role');
        $title = "Nouvel Role";

        $role = new Role();

        $permissions = Permission::orderBy('type','asc')->get();

        return view('roles.create',compact(['title','role','permissions']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->check('create_role');

        $title = 'Liste des roles';
        $role = new Role();
        $role->nom = $request->nom;
        $role->save();
         
        $role->permissions()->attach($request->permissions);

        //  foreach($request->permissions as $permission_id){
            
        //     DB::table('permission_role')->insert([
        //         'permission_id' => $permission_id,
        //         'role_id' => $role->id
        //     ]);
        
        // }

        return redirect('roles.index')->with('success','Role ajouté avec success')->with('title',$title);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->check('show_role');
        $users = User::where('role_id',$id)->get();
        $permissions = User::where('role_id',$id)->first()->role->permissions;

        return view('roles.show',compact(['users','permissions']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $this->check('edit_role');
        $title = 'Mise à jour du role';
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
       
        return view('roles.edit',compact(['title','role','permissions']));
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
        $this->check('edit_role');
        $title = 'Liste des roles';
        $rules = [
            'nom'    => 'required',
        ];

        $request->validate($rules);

        $role = Role::findOrFail($id);
        $role->nom = $request->nom;
        $role->save();
      
        $role->permissions()->detach();

        $role->permissions()->attach($request->permissions);


        return redirect(route('role-index'))->with('success','Role modifié avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->check('delete_role');

        $role = Role::findOrFail($id);

        if ($role->delete()) {
            return back()->with('success', 'Whoop!!! le Role à été Supprimé avec succes');
        }else{
            return back()->with('error', "Whoop!!!,Erreur lors de la suppression du role");
        }
    }
}
