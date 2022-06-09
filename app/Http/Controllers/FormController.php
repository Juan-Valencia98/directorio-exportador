<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Monedas;
use App\Models\Producto;
use App\Models\Empresa;
use App\Models\Rubro;
use App\Models\UnidadMedida;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    protected $categorias;

    public function __construct(Categorias $categorias) {
        $this->categorias = $categorias;
    }

    public function index() {
        $categorias = Categorias::all();
        $empresas = Empresa::all();
        $monedas = Monedas::all();
        $rubros = Rubro::all();
        $medidas = UnidadMedida::all();
        return view('formularios.registrar_producto', ['categorias' => $categorias,
                                                        'empresas' => $empresas,
                                                        'monedas' => $monedas,
                                                        'rubros' => $rubros,
                                                        'medidas' => $medidas]);
    }
    public function empresa() {
        return view('formularios.registrar_empresa');
    }

    public function storeProd(Request $data) {
        $producto = new Producto();

        $producto->titulo_empresa = $data->titulo_empresa;
        $producto->rubro_producto = $data->rubro_producto;
        $producto->numero_producto = $data->numero_producto;
        $producto->categoria_producto = $data->categoria_producto;
        $producto->nombre_producto = $data->nombre_producto;
        if ($data->hasFile('imagen_producto')) {
            $file = $data->file('imagen_producto');
            $endPath = 'images/productos/'.$data->titulo_empresa.'/';
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
    public function storeEmpr(Request $data) {
        $empresa = new Empresa();

        if ($data->hasFile('marca_logo_empresa')) {
            $fileLogo = $data->file('marca_logo_empresa');
            $endPathLogo = 'images/empresa/'.$data->titulo_empresa.'/';
            $fileNameLogo = time() . '-' . $fileLogo->getClientOriginalName();
            $uploadSuccessLogo = $data->file('marca_logo_empresa')->move($endPathLogo, $fileNameLogo);
            $empresa->logo_empresa = $endPathLogo . $fileNameLogo;
        }
        $empresa->titulo_empresa = $data->titulo_empresa;
        $empresa->descripcion_empresa = $data->descripcion_empresa;
        $empresa->historia_empresa = '$data->historia_empresa';
        $empresa->mision_empresa = $data->mision_empresa;
        $empresa->vision_empresa = $data->vision_empresa;
        $empresa->whatsapp_empresa = $data->whatsapp_empresa;
        $empresa->facebook_empresa = $data->facebook_empresa;
        $empresa->estado = 'activo';
        

        $empresa->save();
        return redirect()->to('/');

    }
}
