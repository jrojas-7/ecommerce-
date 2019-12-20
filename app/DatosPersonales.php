<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//use App\Cliente;

class DatosPersonales extends Model
{
    public $table = 'datos_personales';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $guarded = [];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'datos_personales_id');
    }
}
