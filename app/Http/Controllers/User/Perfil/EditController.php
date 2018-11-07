<?php

namespace App\Http\Controllers\User\Perfil;

use App\Models\User;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class EditController extends Controller
{
    public function edit(User $usr)
    {
        $user = User::find($usr->id);

        if(!$user){
            throw  new NotFoundHttpException('Usuario no encontrado');
        }

        return view('pagina.panelAdmin.users.perfil.edit', compact('user'));
    }
}
