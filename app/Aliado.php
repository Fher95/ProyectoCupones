<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    protected $table = "aliados";

    protected $fillable = ['nombreAliado', 'telefonoAliado', 'direccionAliado', 'idUsuario'];
    public $timestamps = false;
    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function cupones()
    {
        return $this->hasMany('App\Cupon');
    }
}
