<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpresaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cli-reg-prod', [FormController::class, 'index']);

Route::post('crearProducto', [FormController::class, 'storeProd']);

Route::get('cli-show-prod', [ProductoController::class, 'index']);

Route::get('cli-reg-empr', [FormController::class, 'empresa']);

Route::post('crearEmpresa', [FormController::class, 'storeEmpr']);

Route::get('cli-show-empr', [EmpresaController::class, 'index']);
<<<<<<< HEAD

Route::get('cli-show-det-prod/{id}', [ProductoController::class, 'detProd']);

Route::get('cli-show-det-emp/{id}', [EmpresaController::class, 'detEmp']);
=======
>>>>>>> 18e5c8cd67402b8c243097f585f2190f25ac3002
