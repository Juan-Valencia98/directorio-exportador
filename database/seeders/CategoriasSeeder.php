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
            'nombre_categoria' => 'ANIMALES VIVOS Y PRODUCTOS DEL REINO ANIMAL',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PRODUCTOS DEL REINO VEGETAL',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PRODUCTOS DE LAS INDUSTRIAS ALIMENTARIAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PRODUCTOS MINERALES',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PRODUCTOS DE LAS INDUSTRIAS QUÍMICAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PLÁSTICO Y SUS MANUFACTURAS. CAUCHO',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PIELES CUEROS, PELETERÍA Y MANUFACTURAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'MADERA, CARBÓN VEGETAL, CORCHO',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PASTA DE MAERA, PAPEL O CARTÓN',
        ]);
        Categorias::create([
            'nombre_categoria' => 'MATERIAS TEXTILES Y SUS MANUFACTURAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'CALZADO, SOMBRERS Y DEMÁS TOCADOS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'MANUFACTURAS DE PIEDRA, YESO, CEMENTO',
        ]);
        Categorias::create([
            'nombre_categoria' => 'PERLAS FINAS, PIEDRAS PRECIOSAS O SEMIPRECIOSAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'METALES COMUNES Y MANUFACTURAS',
        ]);
        Categorias::create([
            'nombre_categoria' => 'MÁQUINAS Y APARATOS, MATERIAL ELÉCTRICO',
        ]);
    }
}
