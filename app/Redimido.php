<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Redimido extends Pivot
{
    protected $table = "redimidos";

    protected $fillable = ['idUsuario', 'idCupon', 'fechaCompra', 'fechaRedimido','codigoARedimir'];

    public $timestamps = false;
}
