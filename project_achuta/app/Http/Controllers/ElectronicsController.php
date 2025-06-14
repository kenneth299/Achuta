<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectronicsController extends Controller
{
    function index(){
       return view('Electronics.index');
    }
}
