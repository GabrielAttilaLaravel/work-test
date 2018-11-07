<?php

namespace App\Http\Controllers\PanelAdmin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Le hacemos llamado a la vista del index de la seccion de usurios
        return view('pagina.panelAdmin.index');
    }
}
