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

        if ($data->hasFile('marca_logo_empresa')) {
            $fileLogo = $data->file('marca_logo_empresa');
            $endPathLogo = 'images/productos/';
            $fileNameLogo = time() . '-' . $fileLogo->getClientOriginalName();
            $uploadSuccessLogo = $data->file('marca_logo_empresa')->move($endPathLogo, $fileNameLogo);
            $producto->marca_logo_empresa = $endPathLogo . $fileNameLogo;
        }
        $producto->descripcion_empresa = $data->descripcion_empresa;
        $producto->rubro_producto = $data->rubro_producto;
        $producto->numero_producto = $data->numero_producto;
        $producto->categoria_producto = $data->categoria_producto;
        $producto->nombre_producto = $data->nombre_producto;
        if ($data->hasFile('imagen_producto')) {
            $file = $data->file('imagen_producto');
            $endPath = 'images/productos/';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $data->file('imagen_producto')->move($endPath, $fileName);
            $producto->binario_producto = $endPath . $fileName;
        }
        $producto->unidad_medida_producto = $data->unidad_medida_producto;
        $producto->descripcion_producto = $data->descripcion_producto;
        $producto->precio_producto = $data->precio_producto;
        $producto->moneda_producto = $data->moneda_producto;

        $producto->save();
        return redirect()->to('/');

    }
}
