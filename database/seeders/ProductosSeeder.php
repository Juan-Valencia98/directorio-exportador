<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'titulo_empresa' => 'GATITO FELIZ',
            'rubro_producto' => 'CARNES Y DESPOJOS COMESTIBLES',
            'numero_producto' => '1',
            'categoria_producto' => 'PRODUCTOS DE LAS INDUSTRIAS ALIMENTARIAS',
            'nombre_producto' => 'KROKETITAS',
            'binario_producto' => 'images/productos/GATITO FELIZ/1654848547-cantidad_de_comida_diaria_para_gatos_21839_orig.jpg',
            'unidad_medida_producto' => 'UNIDADES',
            'descripcion_producto' => 'LAS MEJORES CARNES QUE PUEDES OFRECER A TU FELINO SON EL POLLO, LA TERNERA Y EL PAVO. UNA PECHUGA DE POLLO O UNA HAMBURGUESA DE VACA SON IDEALES PARA SU DIETA. OTRAS OPCIONES SON EL CERDO Y EL CONEJO. ES MEJOR EVITAR LAS PARTES GRASAS COMO LA PIEL DEL PAVO O DEL POLLO, AUNQUE SÍ QUE PUEDES OFRECÉRSELAS A GATOS DESNUTRIDOS QUE NECESITEN COGER PESO.',
            'precio_producto' => '250.00',
            'moneda_producto' => 'BOB',
        ]);
    }
}
