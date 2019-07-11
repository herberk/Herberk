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


Route::fallback(function(){
    return response()->view('errors.404', [], 404);
});

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/escritorioQuery','HomeController@Query')->name('escritorioQuery');

Route::get('contact-us',array('as'=>'getcontact','uses'=>'ConfigController@getContact'));                    //muestra la ventana de contacto
Route::post('contact-us',array('as'=>'postcontact','uses'=>'ConfigController@postContact'));              // POST de mensaje
Route::get('ver-msge',array('as'=>'vermensage','uses'=>'ConfigController@vermensage'))->name('ver-msge');    //Para ver los mensajes recibidos

Route::group(['middleware' => 'auth'], function () {
    Route::get('/config', 'SettingController@index')->name('config');
    Route::post('/settings', 'SettingController@store')->name('settings.store');
    Route::get('/settings', 'SettingController@show')->name('settings');
    Route::get('/configselec', function () {
        return view('shared._modal-sm');
    })->name('configselec');

});



Route::group([ 'namespace' => 'Auth'],function () {
    require __DIR__ . '/routes/auth.routes.php';
});

Route::group([ 'namespace' => 'User'], function () {
    require __DIR__ . '/routes/user.routes.php';
});
Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/empresas.routes.php';
});

Route::group([ 'namespace' => 'Tablas'], function () {
    require __DIR__ . '/routes/tablas.routes.php';
});

Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/juradas.routes.php';
});

Route::group([ 'namespace' => 'Empresas'], function () {
    require __DIR__ . '/routes/archivos.routes.php';
});