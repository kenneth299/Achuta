<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenController extends Controller
{
    function index(){
      return view('Men.index');
    }
}
