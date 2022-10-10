<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index ()
    {
        return view('dashboard.index');
    }

    public function colaboradores ()
    {
        return view('dashboard.colaboradores.index');
    }

    public function certificaciones ()
    {

    }
}
