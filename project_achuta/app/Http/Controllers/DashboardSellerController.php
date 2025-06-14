<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSellerController extends Controller
{
    public function index(){
        // Si l'utilisateur est admin, on le redirige vers le dashboard admin
        if (auth()->user()->status == 'admin') {
            return redirect()->route('dashboardAdmin');
        }

        // Sinon, on affiche le dashboard seller
        return view('DashboardSeller.index');
    }

    
}