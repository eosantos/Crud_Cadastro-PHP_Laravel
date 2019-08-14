<?php

Auth::routes();

Route::get('/', 'LoginController@index');

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', 'HomeController@home')->name('home');

Route::get('criar', 'PessoasController@criar')->name('criar');

Route::post('salvar', 'PessoasController@salvar')->name('salvar');

Route::get('listar', 'PessoasController@listar')->name('listar');

Route::get('editar/{id}', 'PessoasController@editar')->name('editar');

Route::post('atulalizar', 'PessoasController@atualizar')->name('atualizar');

Route::get('delete/{id}', 'PessoasController@delete')->name('delete');

Route::get('criarCarros', 'CarrosController@criarcarros')->name('criarcarros');

Route::post('salvarCarros', 'CarrosController@salvarCarros')->name('salvarCarros');

Route::get('listarCarros', 'CarrosController@listarCarros')->name('listarCarros');

Route::get('editarCarros/{id}', 'CarrosController@editarCarros')->name('editarCarros');

Route::post('atualizarCarros', 'CarrosController@atualizarCarros')->name('atualizarCarros');

Route::get('deleteCarros/{id}', 'CarrosController@deleteCarros')->name('deleteCarros');





