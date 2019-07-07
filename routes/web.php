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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('inventories', 'inventoryController');
Route::resource('purchasing', 'purchasingController');
Route::resource('billings', 'billingController');
Route::post('consultarCantidades', 'purchasingController@consultarCantidades');
Route::post('realizaCompra', 'purchasingController@realizaCompra')->name('realizaCompra');
Route::get('generar_factura/{id_factura}', [
    'as' => 'generar_factura',
    'uses' => 'purchasingController@generar_factura',
    ]);