<?php

namespace Database\Seeders;

use App\Models\UnidadMedida;
use Illuminate\Database\Seeder;

class MedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnidadMedida::create([
            'nombre_medida' => 'PIEZAS',
            'abrv_medida' => 'PZ',
        ]);
        UnidadMedida::create([
            'nombre_medida' => 'UNIDADES',
            'abrv_medida' => 'UN',
        ]);
        UnidadMedida::create([
            'nombre_medida' => 'PIE',
            'abrv_medida' => 'FT',
        ]);
        UnidadMedida::create([
            'nombre_medida' => 'PULGADA',
            'abrv_medida' => 'PL',
        ]);
        UnidadMedida::create([
            'nombre_medida' => 'YARDA',
            'abrv_medida' => 'YD',
        ]);
        UnidadMedida::create([
            'nombre_medida' => 'LIBRA',
            'abrv_medida' => 'LB',
        ]);
    }
}
