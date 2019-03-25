<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail;

    protected $table = "usuarios";

    protected $fillable = ['nombreUsuario','email','telefonoUsuario', 'password'];
    public $timestamps = false;

    public function aliados()
    {
        return $this->hasMany('App\Aliado');
    }

    public function cuponesCompra()
    {
        return $this->belongsToMany('App\Usuario', 'Compras', 'idUsuario','idCupon')->using('App\Compra');
    }

    public function cuponesReserva()
    {
        return $this->belongsToMany('App\Usuario', 'Reservas', 'idUsuario','idCupon')->using('App\Redimido');
    }

    /**
    * Overrides the method to ignore the remember token.
    */
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
        parent::setAttribute($key, $value);
        }
    }
}
