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

        return redirect()->route('list.services')->withSuccess('Ajout éffectué avec succes');

    }

    public function EditServiceForm($serviceID)
    {
        $service=Service::find($serviceID);
        if(is_null($service)){
            return back()->with('error','Aucun service trouvé');
        }else{
            return view('services.edit')->withService($service);
        }
    }

    public function EditService(Request $request,$serviceID)
    {
        $service=Service::find($serviceID);
        if(is_null($service)){
            return back()->with('error','Aucun service trouvé');
        }else{
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

            $service->libelle = request()->libelle;
            $service->description = request()->description;
            $service->image       = $filename;
            if($service->update()){
                return redirect()->route('list.services')->withSuccess('Modification éffectué avec succes');
            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');

            }
        }
    }

    public function DeleteService($serviceID)
    {
        $service=Service::find($serviceID);
        if(is_null($service)){
            return back()->with('error','Aucun service trouvé');
        }else{
            if($service->delete()){
                return redirect()->route('list.services')->withSuccess('Supression éffectué avec succes');

            }else{
                return back()->with('error','La suppresion n\'a pas été éffectué');
            }
        }
    }
}
