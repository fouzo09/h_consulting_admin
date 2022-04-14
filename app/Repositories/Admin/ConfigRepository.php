<?php
namespace App\Repositories\Admin;

use App\Interfaces\Admin\ConfigRepositoryInterface ;
use App\Models\Config;
use Illuminate\Http\Request;

class ConfigRepository implements ConfigRepositoryInterface {


    public function getConfig(){
        try{

            $config = Config::first();
            if(is_null($config)) $config = new Config();

            return $config;
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }

    public function postConfig(Config $_config){
        try{
            $config = Config::first();
            
            if(is_null($config)) $config = new Config();
       
            $config->nom_plateforme = $_config->nom_plateforme; 
            $config->telephone = $_config->telephone; 
            $config->adresse = $_config->adresse; 
            $config->email = $_config->email; 
            $config->logo = $_config->logo->getClientOriginalName(); 
            $config->activation_notification = ($_config->activation_notification == 'on') ? 1 : 0; 

            upload_file($_config->logo, 'ASSET_CONFIG_IMAGE');

            if($config->save()){
                
                return true;
            }else{
                return false;
            }
        }catch(\Exception $ex){
            return $ex->getMessage();
        }
    }
}