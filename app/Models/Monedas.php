<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monedas extends Model
{
    use HasFactory;

    protected $table = 'monedas';
    protected $hidden = ['id_monedas'];

    public function obtenerMonedas() {
        return Monedas::all();
    }
}
