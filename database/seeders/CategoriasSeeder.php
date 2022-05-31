<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::create([
            'nombre_categoria' => 'LÁCTEO',
            'descripcion_categoria' => 'Productos lácteos',
        ]);

        Categorias::create([
            'nombre_categoria' => 'AGRÍCOLA',
            'descripcion_categoria' => 'Productos agrícolas',
        ]);
    }
}
