<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "productos";
    protected $primaryKey= "producto_id";

public $timestamps = true;

// relación con sucursal n:1

public function Sucursal()
    {
        return $this->belongsTo(Sucursal::class,'sucursal_id');
}
}
