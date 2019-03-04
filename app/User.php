<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //use Notifiable;
    protected $table = "usuarios";

    protected $guarded = ['password'];
    public $timestamps = false;

    public function aliados()
    {
        return $this->hasMany('App\Aliado');
    }

    public function cuponesCompra()
    {
        return $this->belongsToMany('App\Cupon', 'Compra', 'idUsuario','idCupon')->withPivot('fechaCompra', 'cantidad');
    }

    public function cuponesReserva()
    {
        return $this->belongsToMany('App\Usuario', 'Reserva', 'idUsuario','idCupon')->withPivot('fechaReserva', 'cantidad');
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
