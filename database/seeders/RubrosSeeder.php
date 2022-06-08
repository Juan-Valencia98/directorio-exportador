<?php

namespace Database\Seeders;

use App\Models\Rubro;
use Illuminate\Database\Seeder;

class RubrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'ANIMALES VIVOS',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'CARNES Y DESPOJOS COMESTIBLES',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'PESCADOS Y CRUSTÁCEOS',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'MOLUSCOS Y DEMÁS INVERTEBRADOS ACUÁTICOS',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'LECHE Y PRODUCTOS LÁCTEOS',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'HUEVOS DE AVE',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'MIEL NATURAL',
        ]);
        Rubro::create([
            'orden' => '1001',
            'nombre_rubro' => 'PRODUCTOS COMESTIBLES DE ORIGEN ANIMAL',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'PLANTAS VIVAS Y PRODUCTOS DE LA FLORICULTURA',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'HORTALIZAS, PLANTAS, RAÍCES Y TUBÉRCULOS ALIMENTICIOS',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'FRUTAS Y FRUTOS COMESTIBLES',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'CAFÉ, TÉ, YERBA MATE Y ESPECIAS',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'CEREALES',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'MALTA, ALMIDÓN Y FÉCULA, INULINA, GLUTEN DE TRIGO',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'SEMILLAS Y FRUTOS OLEAGINOSOS, SEMILLAS Y FRUTOS DIVERSOS',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'PLANTAS MEDICINALES O INDUSTRIALES',
        ]);
        Rubro::create([
            'orden' => '1002',
            'nombre_rubro' => 'GOMAS, RESINAS Y DEMÁS JUGOS Y EXTRACTOS VEGETALES',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'PREPARACIONES DE CARNE, PESCADO, CRUSTÁCEOS, MOLUSCOS',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'AZÚCARES Y ARTÍCULOS DE CONFITERÍA',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'CACAO Y SUS PREPARACIONES',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'PREPARACIONES A BASE DE CEREALES, HARINA, ALMIDÓN',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'PRODUCTOS DE PASTELERÍA',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'PREPARACIONES DE HORTALIZAS, FRUTAS U OTROS FRUTOS',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'PREPARACIONES ALIMENTICIAS DIVERSAS',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'BEBIDAS, LÍQUIDOS ALCOHÓLICOS Y VINAGRE',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'ALIMENTOS PREPARADOS PARA ANIMALES',
        ]);
        Rubro::create([
            'orden' => '1003',
            'nombre_rubro' => 'TABACO Y SUCEDÁNEOS DEL TABACO',
        ]);
    }
}
