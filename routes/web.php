<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\CertificacionController;

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
    //return view('welcome');
    return view('template.dashboard');
});
//Private
////Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard.index");
////Colaborador
Route::get('/dashboard/colaboradores', [ColaboradorController::class, 'index'])->name("colaboradores.index");
Route::get('/dashboard/colaboradores/create', [ColaboradorController::class, 'create'])->name("colaboradores.create");
Route::post('/dashboard/colaboradores/create', [ColaboradorController::class, 'store'])->name("colaboradores.store");
Route::get('/dashboard/colaboradores/{colaborador}', [ColaboradorController::class, 'show'])->name("colaboradores.show");
Route::get('/dashboard/colaboradores/{colaborador}/edit/', [ColaboradorController::class, 'edit'])->name("colaboradores.edit");
Route::put('/dashboard/colaboradores/{colaborador}', [ColaboradorController::class, 'update'])->name("colaboradores.update");
Route::delete('/dashboard/colaboradores/{colaborador}', [ColaboradorController::class, 'destroy'])->name("colaboradores.delete");
// Route::resource('/dashboard/colaboradores', ColaboradorController::class);

////Certificacion
Route::get('/dashboard/certificaciones', [CertificacionController::class, 'index'])->name("certificaciones.index");
Route::get('/dashboard/certificaciones/create', [CertificacionController::class, 'create'])->name("certificaciones.create");
Route::post('/dashboard/certificaciones/create', [CertificacionController::class, 'store'])->name("certificaciones.store");
Route::get('/dashboard/certificaciones/{id}', [CertificacionController::class, 'show'])->name("certificaciones.show");

//Public
