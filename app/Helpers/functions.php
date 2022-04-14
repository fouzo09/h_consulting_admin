<?php

if(!function_exists('upload_file')){
    /**
     * 
     * @param file le fichier a uploader
     * @param path le chemin ou enregistrer le fichier
     */
    function upload_file($file, $path){
        
        $file->move(public_path(env($path)), $file->getClientOriginalName());
    }
}