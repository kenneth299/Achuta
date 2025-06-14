<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomenController extends Controller
{
     function index(){
         return view('Women.index');
    }
}
