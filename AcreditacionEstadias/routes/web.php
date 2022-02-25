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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//----------------------------group

Route::group(['middleware'=>'auth'], function(){



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


});

//Example ----------------------

//End Example-------------

/*
Route::get('dropdown',[DropdownController::class, 'ya'])->name('select');
Route::get('getState',[DropdownController::class, 'getState'])->name('getState');
Route::get('getCity',[DropdownController::class, 'getCity'])->name('getCity');
*/

Route::get('altaprimernivel',[App\Http\Controllers\AcreditacionController::class,'altaprimernivel'])->name('altaprimernivel');
Route::POST('guardarprimernivel',[App\Http\Controllers\AcreditacionController::class,'guardarprimernivel'])->name('guardarprimernivel');
Route::get('eloquent',[App\Http\Controllers\AcreditacionController::class,'eloquent'])->name('eloquent');

/** CRUD CALIDAD PERCIBIDA -> INICIO*/
Route::get('altaprimernivelsec2',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2'])->name('altaprimernivelsec2');
Route::get('altaprimernivelsec2/{id}',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2Show'])->name('altaprimernivelsec2Show');
Route::post('altaprimernivelsec2',[App\Http\Controllers\CalidadPercibidaController::class,'altaprimernivelsec2Save'])->name('altaprimernivelsec2Save');
Route::get('reporteavalciudadano',[App\Http\Controllers\CalidadPercibidaController::class,'reporteavalpercibido'])->name('reporteavalciudadano');



/** FIN -> CRUD CALIDAD PERCIBIDA */


Route::get('altaprimernivelsec3',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3'])->name('altaprimernivelsec3');
Route::get('altaprimernivelsec3/{id}',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3Show'])->name('altaprimernivelsec3Show');
Route::post('altaprimernivelsec3',[App\Http\Controllers\CtspController::class,'altaprimernivelsec3Save'])->name('altaprimernivelsec3Save');


/** CRUD COCASEP -> INICIO*/
Route::get('altaprimernivelsec4',[App\Http\Controllers\AcreditacionController::class,'altaprimernivelsec4'])->name('altaprimernivelsec4');
Route::get('altaprimernivelsec4/{id}',[App\Http\Controllers\AcreditacionController::class,'altaprimernivelsec4Show'])->name('altaprimernivelsec4Show');
Route::post('altaprimernivelsec4',[App\Http\Controllers\AcreditacionController::class,'altaprimernivelsec4Save'])->name('altaprimernivelsec4Save');
/** FIN -> CRUD COCASEP */

Route::get('altaprimernivelsec5',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5'])->name('altaprimernivelsec5');
Route::get('altaprimernivelsec5/{id}',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5Show'])->name('altaprimernivelsec5Show');
Route::post('altaprimernivelsec5',[App\Http\Controllers\IndicasController::class,'altaprimernivelsec5Save'])->name('altaprimernivelsec5Save');



Route::get('altaprimernivelsec6',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6'])->name('altaprimernivelsec6');
Route::get('altaprimernivelsec6/{id}',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6Show'])->name('altaprimernivelsec6Show');
Route::post('altaprimernivelsec6',[App\Http\Controllers\ApoyosController::class,'altaprimernivelsec6Save'])->name('altaprimernivelsec5Save');

;
