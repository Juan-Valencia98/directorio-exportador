<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index() {
        $empresas = DB::table('empresas')->get();
        return view('vistas.ver_empresa', ['empresas' => $empresas]);
    }

    public function detEmp($id_empresa) {
        $empresa = DB::table('empresas')->where('id_empresa', $id_empresa)->get();
        return view('vistas.ver_det_emp', ['empresa' => $empresa]);
    }
}
