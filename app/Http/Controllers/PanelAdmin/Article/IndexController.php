<?php

namespace App\Http\Controllers\PanelAdmin\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('pagina.panelAdmin.article.index');
    }
}
