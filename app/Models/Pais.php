<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $fillable = ['nameP'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
