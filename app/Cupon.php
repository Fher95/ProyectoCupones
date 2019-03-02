<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected $table = "cupones";

    protected $fillable = ['nombreCupon', 'URLImagenCupon', 'categoriaCupon', 'precioCupon', 'descuentoCupon',
                            'totalAutorizados', 'idUsuario', 'idAliado'];

    public function aliado()
    {
        return $this->belongsTo('App\Aliado');
    }

    public function usuariosCompra()
    {
        return $this->belongsToMany('App\Usuario', 'Compra', 'idUsuario','idCupon')->withPivot('fechaCompra', 'cantidad');
    }

    public function usuariosReserva()
    {
        return $this->belongsToMany('App\Usuario', 'Reserva', 'idUsuario','idCupon')->withPivot('fechaReserva', 'cantidad');
    }
}
