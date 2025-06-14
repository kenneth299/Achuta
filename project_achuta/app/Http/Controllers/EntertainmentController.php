<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntertainmentController extends Controller
{
       function index(){
         return view('Entertainment.index');
    }
}
