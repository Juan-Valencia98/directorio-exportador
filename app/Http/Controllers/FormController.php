<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Monedas;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    protected $categorias;

    public function __construct(Categorias $categorias) {
        $this->categorias = $categorias;
    }

    public function index() {
        $categorias = DB::table('categorias')->get();
        $monedas = DB::table('monedas')->get();
        return view('formularios.registrar_producto', ['categorias' => $categorias, 'monedas' => $monedas]);
    }

    public function storeProd(Request $data) {
        $producto = new Producto();

        $producto->nombre_producto = $data->nombre_producto;
        $producto->descripcion_producto = $data->descripcion_producto;
        $producto->categoria_producto = $data->categoria_producto;
        $producto->precio_producto = $data->precio_producto;
        $producto->moneda_producto = $data->moneda_producto;

        if ($data->hasFile('imagen_producto')) {
            $file = $data->file('imagen_producto');
            $endPath = 'images/productos/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $data->file('imagen_producto')->move($endPath, $filename);
            $producto->binario_producto = $endPath . $filename;
        }

        $producto->save();
        return redirect()->to('/');

    }
}
