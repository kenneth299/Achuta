<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidsController extends Controller
{
     function index(){
         return view('Kids.index');
    }
}
