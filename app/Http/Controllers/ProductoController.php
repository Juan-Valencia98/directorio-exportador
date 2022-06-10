<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index() {
        $productos = DB::table('productos')->get();
        return view('vistas.ver_productos', ['productos' => $productos]);
    }

    public function detProd($id_producto) {
        $det = DB::table('productos')->where('id_producto', $id_producto)->get();
        return view('vistas.ver_det_prod', ['det' => $det]);
    }
}

