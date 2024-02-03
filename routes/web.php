<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('vista',[SistemaController::class,'vista'])->name('vista');
route::get('Inscripcion',[SistemaController::class,'Inscripcion'])->name('Inscripcion');
route::post('guardaralumno',[SistemaController::class,'guardaralumno'])->name('guardaralumno');
route::get('Datos',[SistemaController::class,'Datos'])->name('Datos');
route::post('guardardatos',[SistemaController::class,'guardardatos'])->name('guardardatos');
route::get('AlumnosInscritos',[SistemaController::class,'AlumnosInscritos'])->name('AlumnosInscritos');
route::get('MostrarInscritos/{ide}',[SistemaController::class,'MostrarInscritos'])->name('MostrarInscritos');
route::get('MostrarDatosInscritos/{ide}',[SistemaController::class,'MostrarDatosInscritos'])->name('MostrarDatosInscritos');
route::get('Menu',[SistemaController::class,'Menu'])->name('Menu');
route::get('Login',[LoginController::class,'Login'])->name('Login');
route::post('validar',[LoginController::class,'validar'])->name('validar');
route::get('RegistroMaterias',[SistemaController::class,'RegistroMaterias'])->name('RegistroMaterias');
route::post('guardarmaterias',[SistemaController::class,'guardarmaterias'])->name('guardarmaterias');
route::get('RegistroSecciones/{idd}',[SistemaController::class,'RegistroSecciones'])->name('RegistroSecciones');
route::post('guardarsecciones',[SistemaController::class,'guardarsecciones'])->name('guardarsecciones');
route::get('NuevasSecciones',[SistemaController::class,'NuevasSecciones'])->name('NuevasSecciones');
route::post('guardarnuevassecciones',[SistemaController::class,'guardarnuevassecciones'])->name('guardarnuevassecciones');
route::get('MateriasRegistradas',[SistemaController::class,'MateriasRegistradas'])->name('MateriasRegistradas');
//route::get('Mensaje',[EmpleadosController::class,'Mensaje'])->name('Mensaje');

Route::get('/', function () {
    return view('welcome');
});


