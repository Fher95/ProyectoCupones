<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compras";

    protected $fillable = ['idUsuario', 'idCupon', 'fechaCompra', 'cantidad'];
    
    public $timestamps = false;
    
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
    
    public function cupon()
    {
        return $this->belongsTo('App\Cupon');
    }

}
