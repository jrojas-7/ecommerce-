<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $table = 'ventas';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $guarded = [];

    public function formaDePago()
    {
        return $this->belongsTo(FormaDePago::class, 'forma_de_pago_id');
    }
}
