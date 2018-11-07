<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function reset(Request $request)
    {

        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        $user = User::where('remember_token', $request->token)
            ->where('email', $request->email)
            ->update([
                'password' => bcrypt($request->password),
                'remember_token' => str_random(50)
            ]);

        if ($user){
            Alert::message('Su contraseña a sido actuailzada con exito', 'success');
        }else{
            Alert::message('Email y/o Token invalido.', 'danger');
        }

        return redirect()->route('password.request');
    }
}
