<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registrarUltimoLogin(){
        $this->ultimo_login = now();
        $this->save();
    }

    public function rol(){
        return $this->belongsTo('App\Models\Rol');
    }
}
