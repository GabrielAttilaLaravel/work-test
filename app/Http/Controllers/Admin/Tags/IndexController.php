<?php

namespace App\Http\Controllers\Admin\Tags;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('pagina.panelAdmin.tags.index');
    }
}
