<?php

namespace Database\Seeders;

use App\Models\Rubro;
use Illuminate\Database\Seeder;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rubro::create([
            'nombre_rubro' => 'INFORMÁTICA',
            'descripcion_rubro' => 'Campo de la informática',
        ]);
        Rubro::create([
            'nombre_rubro' => 'PIEZAS METÁLICAS',
            'descripcion_rubro' => 'Campo de la fabriación de metales',
        ]);
    }
}
