<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\PanelAdmin\DashboardController as PanelAdminController;

class DashboardController extends PanelAdminController
{
    public function dashboard()
    {
        return view('pagina.panelAdmin.dashboard');
    }
}
