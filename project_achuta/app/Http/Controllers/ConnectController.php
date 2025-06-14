<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    function index(){
      return view('Connect.index');
    }
}
