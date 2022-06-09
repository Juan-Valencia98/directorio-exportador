<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index() {
        $empresas = DB::table('empresas')->get();
        return view('vistas.ver_empresa', ['empresas' => $empresas]);
    }
}
