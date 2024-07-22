<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InsertarSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            ['sucursal_nombre' => 'Sucursal 1'],
            ['sucursal_nombre' => 'Sucursal 2'],
            ['sucursal_nombre' => 'Sucursal 3'],
        ]);
    }
}