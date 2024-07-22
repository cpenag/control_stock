<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(array( 
            [  'producto_codigo' => 'PROD001',
              'producto_nombre' => 'Producto 1', 
              'producto_categoria' => 'Categoría A',
   'producto_cantidad' => 10,
  'producto_precio' => 2000,
              'descripcion' => 'Descripción del Producto 1',
   'sucursal_id' => 1,       
          ],
[  'producto_codigo' => 'PROD002',
              'producto_nombre' => 'Producto 2', 
              'producto_categoria' => 'Categoría B',
   'producto_cantidad' => 13,
  'producto_precio' => 59000,
              'descripcion' => 'Descripción del Producto 2',
   'sucursal_id' => 2,       
          ],
[  'producto_codigo' => 'PROD003',
              'producto_nombre' => 'Producto 3', 
              'producto_categoria' => 'Categoría C',
   'producto_cantidad' => 4,
  'producto_precio' => 15000,
              'descripcion' => 'Descripción del Producto 3',
   'sucursal_id' => 3,       
          ]
        ));
    }
}
