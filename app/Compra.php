<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Compra extends Pivot
{
    protected $table = "compras";

    protected $fillable = ['idUsuario', 'idCupon', 'fechaCompra', 'cantidad'];

    public $timestamps = false;
}
