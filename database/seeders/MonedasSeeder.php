<?php

namespace Database\Seeders;

use App\Models\Monedas;
use Illuminate\Database\Seeder;

class MonedasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monedas::create([
            'nombre_moneda' => 'BOB',
            'descripcion_moneda' => 'BOLIVIANOS',
        ]);

        Monedas::create([
            'nombre_moneda' => 'DOL',
            'descripcion_moneda' => 'DÓLARES',
        ]);
    }
}
