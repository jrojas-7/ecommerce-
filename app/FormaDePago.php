<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaDePago extends Model
{
    public $table = 'formas_de_pago';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $guarded = [];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'forma_de_pago_id');
    }
}
