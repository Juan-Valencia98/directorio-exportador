<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $hidden = ['id_categoria'];

    public function obtenerCategorias() {
        return Categorias::all();
    }
}
