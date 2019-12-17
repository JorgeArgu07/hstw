<?php

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
    return view('base.base');
});
Route::get('/hstw', function () {
    return view('base.base');
});
//Controllers
Route::get('getClientes', 'ClienteController@getClientes');


//views


Route::get('/login', function () {
    return view('login.login');
});


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/logout', 'HomeController@logout')->name('logout');
    Route::get('/', function () {
        return view('base.base');
    });
    Route::get('/hstw', function () {
        return view('base.base');
    });
    Route::post('getClientes', 'ClienteController@getClientes');
    Route::get('viewGestionarClientes', function () {
        return view('modulos.gestionarClientes');
    });
    Route::get('getcobranza', 'ClienteController@getareacobranza');
    Route::get('viewGestionarCobranza', function(){
        return view('modulos.gestionarAreaCobranza');
    });


    Route::post('editarCte', 'ClienteController@editarCte');
    Route::post('registrarCte', 'ClienteController@registrarCte');
    Route::get('getCliente', 'ClienteController@getCliente');
    Route::post('getdireccioncte', 'ClienteController@getdireccioncte');
    Route::post('deleteCliente', 'ClienteController@deleteCliente');
    Route::get('viewVerificarBuro', 'ClienteController@getviewverificarburo');
    Route::get('viewGenerarReportesPrestamos', function(){
        return view('modulos.generarReportesPrestamos');
    });
    Route::get('viewAsignarPrestamos', function(){
        return view('modulos.asignarPrestamos');
    });
    Route::get('viewAsignarTarjetas', function(){
        return view('modulos.asginarTarjetas');
    });
    Route::get('viewInicio', function(){
        return view('inicio');
    });
    Route::get('calcularPrestamos', function(){
        return view('modulos.CalcularPrestamos');
    });
    Route::get('verificarBuroNombre', 'ClienteController@verificarBuroNombre');
    Route::get('verificarBuroRFC', 'ClienteController@verificarBuroRFC');
    Route::get('verificarBuroCURP', 'ClienteController@verificarBuroCURP');
    Route::get('verificarBuroNoCliente', 'ClienteController@verificarBuroNoCliente');

    Route::get('verBuroNoCliente', 'ClienteController@verBuroNoCliente');
    Route::get('viewPdfBuro', function(){
        return view('modulos.pdfBuroCredito');
    });
    Route::get('verPdfBuro/{data}', 'ClienteController@pdfBuro');
    Route::get('setTarjeta', 'ClienteController@setTarjeta');
    Route::get('asignarPrestamo', 'ClienteController@asignarPrestamo');
    Route::get('genReportePrestamo', 'ClienteController@genReportePrestamo');

});


