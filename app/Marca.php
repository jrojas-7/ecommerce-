<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    public $table = 'marcas';
    public $primaryKey = 'id';
    public $timestamps = true;
    public $guarded = [];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'marca_id');
    }
}
