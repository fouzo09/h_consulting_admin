<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Repositories\Admin\ConfigRepository;
use App\Http\Requests\ConfigRequest;
class ConfigController extends Controller
{
    private $configRepository ;

    public function __construct(ConfigRepository $configRepository){

        $this->configRepository = $configRepository;
    }

    public function getIndex(){
        
        $config = $this->configRepository->getConfig();
        return view('config.index', compact('config'));
    }

    public function postConfig(ConfigRequest $request){

        

        $config = new Config($request->all());
      
        $updateConfig = $this->configRepository->postConfig($config);

        
        if($updateConfig){
           
            return back()->withSuccess("Configuration enregistrée.");
        }else{
          
            return back()->withSuccess("Ooppps une erreur est survenue.");
        }
    }
}
