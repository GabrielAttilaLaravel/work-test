<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        // Obtenemos todos los usuarios registrados y le asignamos una
        // paginacion en donde se puedan visualizar maximo 5 usuarios
        $users = User::paginate(5);
        // le hacemos llamado a la vista y le mandamos la variable users para
        // su posterior uso en la template
        return view('pagina.panelAdmin.users.index', compact('users'));
    }
}
