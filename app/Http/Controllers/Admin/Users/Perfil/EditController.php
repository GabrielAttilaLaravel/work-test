<?php

namespace App\Http\Controllers\Admin\Users\Perfil;

use App\Models\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditController extends Controller
{
    public function edit(User $usr)
    {
        // consultamos a un usuario mediante su id
        $user = User::find($usr->id);
        // verificamos si el usuario existe o no para mandar una excepcion
        if(!$user){
            throw  new NotFoundHttpException('Usuario no encontrado');
        }
        // le hacemos llamado a la vista y le mandamos la variable users para
        // su posterior uso en la template
        return view('pagina.panelAdmin.users.perfil.edit', compact('user'));
    }
}
