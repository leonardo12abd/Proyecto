<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\FirstlevelController;
use App\Http\Controllers\IndicasController;
use App\Http\Controllers\CalidadPercibidaController;
use App\Http\Controllers\CtspController;
use App\Http\Controllers\ApoyosController;




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
    return redirect('/login');
    //return view('welcome');
});






//----------------------------group

Route::group(['middleware'=>'auth'], function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ------------------------ Seccion Vistas ----------------------------------------------------
//                              Usuario
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
//                             Primer Nivel

// ------------------------ Seccion Create ----------------------------------------------------
//                          Crear Uusuarios
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');


// ------------------------ Seccion list ----------------------------------------------------
//                         Listar Usuarios
Route::get('/userlist',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');

// ------------------------ Seccion Show ----------------------------------------------------
//                         Find id
Route::get('/users/{user}',[App\Http\Controllers\UserController::class, 'show'])->name('users.show');


// ------------------------ Seccion Edit ----------------------------------------------------
//                         Edit
Route::get('/users/{user}/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');


// ------------------------ Seccion Update ----------------------------------------------------
//                         Update
Route::put('/users/{user}',[App\Http\Controllers\UserController::class, 'update'])->name('users.update');


// ------------------------ Seccion delete ----------------------------------------------------
//                         Destroy
Route::delete('/users/{user}',[App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

//PDF
// ---------------------------------Vista ´Previa Pdf users -------------------------------
Route::get('/userspdf',[App\Http\Controllers\UserController::class, 'pdfusers'])->name('users.pdfusers');

//----------------------------------Download PDF Users----------------
Route::get('/dowloadpdf',[App\Http\Controllers\UserController::class, 'downloadPDF'])->name('users.downloadpdf');



//-----------------------------------Excel Download ---------------------------
 //-------------------------- Table Usuers ---------------------------
//Route::get('importExportView', [App\Http\Controllers\UserController::class, 'importExportView']);
Route::get('export', [App\Http\Controllers\UserController::class, 'export'])->name('export');
//Route::post('import', [App\Http\Controllers\UserController::class, 'import'])->name('import');



Route::get('altaprimernivel',[App\Http\Controllers\AcreditacionController::class,'altaprimernivel'])->name('altaprimernivel');
Route::get('eloquent',[App\Http\Controllers\AcreditacionController::class,'eloquent'])->name('eloquent');
Route::post('guardarprimernivel',[App\Http\Controllers\AcreditacionController::class,'altaprimerSave'])->name('guardarprimernivel');
Route::get('reporteprimernivel',[App\Http\Controllers\AcreditacionController::class,'reporteprimernivel'])->name('reporteprimernivel');
Route::delete('borrarprimernivel/{id}',[App\Http\Controllers\AcreditacionController::class,'borrarprimernivel'])->name('borrarprimernivel');


/** CRUD CALIDAD PERCIBIDA -> INICIO*/
Route::get('altaprimernivelsec2',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2'])->name('altaprimernivelsec2');
Route::get('altaprimernivelsec2/{id}',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2Show'])->name('altaprimernivelsec2Show');
Route::post('altaprimernivelsec2',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2Save'])->name('altaprimernivelsec2Save');
Route::get('reporteavalciudadano',[App\Http\Controllers\CalidadPercibidaController::class,'reporteavalpercibido'])->name('reporteavalciudadano');
Route::delete('borrarcalidadperc/{id}',[App\Http\Controllers\CalidadPercibidaController::class,'borrarcalidadperc'])->name('borrarcalidadperc');
Route::get('exportcalidadperc', [App\Http\Controllers\CalidadPercibidaController::class, 'exportcalidadperc'])->name('exportcalidadperc');
Route::get('viewpdfcalidadperc',[App\Http\Controllers\CalidadPercibidaController::class, 'pdfcalidadperc'])->name('viewpdfcalidadperc');
Route::get('downloadPDFviewpdfcalidadperc',[App\Http\Controllers\CalidadPercibidaController::class, 'downloadPDFviewpdfcalidadperc'])->name('downloadPDFviewpdfcalidadperc');
Route::get('altaprimernivelsec2/{id}/edit',[App\Http\Controllers\CalidadPercibidaController::class,'edit'])->name('editcalidad');
Route::put('/updatecalidad/{id}',[App\Http\Controllers\CalidadPercibidaController::class, 'updatecalidad'])->name('updatecalidad');

/** FIN -> CRUD CALIDAD PERCIBIDA */


Route::get('altaprimernivelsec3',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3'])->name('altaprimernivelsec3');
Route::get('altaprimernivelsec3/{id}',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3Show'])->name('altaprimernivelsec3Show');
Route::post('altaprimernivelsec3',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3Save'])->name('altaprimernivelsec3Save');
Route::get('reportecalidadtsp',[App\Http\Controllers\CtspController::class,'reportecalidadtsp'])->name('reportecalidadtsp');
Route::delete('borrarctsp/{id}',[App\Http\Controllers\CtspController::class,'borrarctsp'])->name('borrarctsp');
Route::get('exportctsp', [App\Http\Controllers\CtspController::class, 'exportctsp'])->name('exportctsp');
Route::get('altaprimernivelsec3/{id}/edit',[App\Http\Controllers\CtspController::class,'edit'])->name('editctsp');
Route::put('/update/{id}',[App\Http\Controllers\CtspController::class, 'update'])->name('updatectsp');



/** CRUD COCASEP -> INICIO*/
Route::get('altaprimernivelsec4',[App\Http\Controllers\CocasepController::class,'altaprimernivelsec4'])->name('altaprimernivelsec4');
Route::get('altaprimernivelsec4/{id}',[App\Http\Controllers\CocasepController::class,'altaprimernivelsec4Show'])->name('altaprimernivelsec4Show');
Route::post('altaprimernivelsec4',[App\Http\Controllers\CocasepController::class,'altaprimernivelsec4Save'])->name('altaprimernivelsec4Save');
Route::get('reportecocasep',[App\Http\Controllers\CocasepController::class,'reportecocasep'])->name('reportecocasep');
Route::delete('borrarcocasep/{id}',[App\Http\Controllers\CocasepController::class,'borrarcocasep'])->name('borrarcocasep');
Route::get('exportcocasep', [App\Http\Controllers\CocasepController::class, 'exportcocasep'])->name('exportcocasep');
Route::get('altaprimernivelsec4/{id}/edit',[App\Http\Controllers\CocasepController::class,'edit'])->name('editcocasep');
Route::put('/updatecocasep/{id}',[App\Http\Controllers\CocasepController::class, 'updatecocasep'])->name('updatecocasep');

/** FIN -> CRUD COCASEP */

Route::get('altaprimernivelsec5',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5'])->name('altaprimernivelsec5');
Route::get('altaprimernivelsec5/{id}',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5Show'])->name('altaprimernivelsec5Show');
Route::post('altaprimernivelsec5',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5Save'])->name('altaprimernivelsec5Save');
Route::get('reporteindicas',[App\Http\Controllers\IndicasController::class,'reporteindicas'])->name('reporteindicas');
Route::delete('borraindicas/{id}',[App\Http\Controllers\IndicasController::class,'borraindicas'])->name('borraindicas');
Route::get('exportindicas', [App\Http\Controllers\IndicasController::class, 'exportindicas'])->name('exportindicas');
Route::get('altaprimernivelsec5/{id}/edit',[App\Http\Controllers\IndicasController::class,'edit'])->name('editindicas');
Route::put('/updateindicas/{id}',[App\Http\Controllers\IndicasController::class, 'updateindicas'])->name('updateindicas');


Route::get('altaprimernivelsec6',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6'])->name('altaprimernivelsec6');
Route::get('altaprimernivelsec6/{id}',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6Show'])->name('altaprimernivelsec6Show');
Route::post('altaprimernivelsec6',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6Save'])->name('altaprimernivelsec6Save');
Route::get('reporteapoyo',[App\Http\Controllers\ApoyosController::class,'reporteapei'])->name('reporteapoyo');
Route::delete('borrarapoyos/{id}',[App\Http\Controllers\ApoyosController::class,'borrarapoyos'])->name('borrarapoyos');
Route::get('exportapoyos', [App\Http\Controllers\ApoyosController::class, 'exportapoyos'])->name('exportapoyos');
Route::get('altaprimernivelsec6/{id}/edit',[App\Http\Controllers\ApoyosController::class,'edit'])->name('editapoyos');
Route::put('/updateapoyos/{id}',[App\Http\Controllers\ApoyosController::class, 'updateapoyos'])->name('updateapoyos');

});
