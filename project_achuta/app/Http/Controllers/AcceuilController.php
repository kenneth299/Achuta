<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    function index(){
      return view('Acceuil.index');
    }

    
}
