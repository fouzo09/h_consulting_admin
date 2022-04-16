<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;

class HomeController extends Controller
{

  
    public function index()
    {
        $offres = Emploi::get()->take(3);
       
        return view('front.home', compact('offres'));
    }
}
