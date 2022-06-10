<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Contracts\Session\Session;
=======
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    public function index() {
        $empresas = DB::table('empresas')->get();
        return view('vistas.ver_empresa', ['empresas' => $empresas]);
    }
<<<<<<< HEAD

    public function detEmp($id_empresa) {
        $empresa = DB::table('empresas')->where('id_empresa', $id_empresa)->get();
        return view('vistas.ver_det_emp', ['empresa' => $empresa]);
    }
=======
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002
}
