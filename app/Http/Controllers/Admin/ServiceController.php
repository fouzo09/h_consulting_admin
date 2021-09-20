<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Service;

class ServiceController extends Controller
{
    

    public function getIndex(){
        $services = Service::all();
        return view('services.list', compact('services'));
    }

    public function getAdd(){
        return view('services.add');
    }

    public function postAdd(){
        
        $rules = [
            'libelle'     => 'required',
            'description' => 'required',
            'image'       => 'required',
        ];
    
        $customMessages = [
            'required' => 'Le champ :attribute est obligatoire.'
        ];
    
        $this->validate(request(), $rules, $customMessages);

        $filename = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('assets/img/service'), $filename);

        $service = new Service();

        $service->libelle = request()->libelle;
        $service->description = request()->description;
        $service->image       = $filename;

        $service->save();

        return back();
    }
}
