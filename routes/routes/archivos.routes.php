<?php
Route::get('file/show','archivosController@show')->name('file/show');
Route::get('listacategori',  'archivosController@listacat')->name('listacategori');

Route::get('/file/excel','archivosController@export')->name('fileexcel');

//Para manejar los directorios o categorias
Route::get('file/create','archivosController@create')->name('filescreate');
Route::get('/file/edit/{id}','archivosController@edit')->name('fileedit');
Route::post('storefile',['uses' => 'archivosController@store','as' =>'storefile']);
Route::put('file/update/{id}', ['as' =>  'file/update', 'uses' => 'archivosController@update']);
Route::get('file/destroy/{id}', ['as' => 'file/destroy', 'uses' => 'archivosController@destroy']);



//Para manejar archivos
Route::get('fileslista', 'archivosController@index')->name('fileslista');
Route::post('/files', 'archivosController@storefile')->name('files.store');
Route::delete('/files/{file}', 'archivosController@destroyfile')->name('files.destroy');
Route::get('/files/{file}/download', 'archivosController@download')->name('files.download');