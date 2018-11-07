<?php

namespace App\Http\Controllers\PanelAdmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pagina.panelAdmin.index');
    }
}
