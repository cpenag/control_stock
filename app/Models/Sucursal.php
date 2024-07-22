<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $table = "sucursales";
    protected $primaryKey= "sucursal_id";

public $timestamps = true;

//relación con producto 1:n

public function Producto(){
return $this->hasMany(Producto::class, 'sucursal_id','sucursal_id');
}
}
