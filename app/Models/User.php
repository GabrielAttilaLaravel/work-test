<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'phone', 'pais_id'
    ];


    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
