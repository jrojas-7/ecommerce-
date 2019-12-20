<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = [];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'ventas', 'producto_id', 'cliente_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
