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

Route::get('/', 'web_controller@indexhome');

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/sharefb', 'web_controller@sharefb');

Route::get('/profildesa', 'web_controller@profildesa');
Route::get('/organisasi', 'web_controller@organisasi');
Route::get('/transparansi/{id}', 'web_controller@transparansi');
Route::get('/lembaga', 'web_controller@lembaga');
Route::get('/beritadesa/', 'web_controller@beritadesa');
Route::get('/pengumumandesa/', 'web_controller@pengumumandesa');
Route::get('/detailberitadesa/{id}', 'web_controller@detailberitadesa');


// form rute
Route::get('/formaddberita', 'web_controller@formaddberita')->middleware('auth');
Route::get('/formaddpengumuman', 'web_controller@formaddpengumuman')->middleware('auth');


Route::get('/formaddjmlpend', 'profildesacontroller@formaddjmlpend')->middleware('auth');
Route::get('/formaddstatpendidikanpend', 'profildesacontroller@formaddstatpendidikanpend')->middleware('auth');
Route::get('/formaddstatpekerjaanpend', 'profildesacontroller@formaddstatpekerjaanpend')->middleware('auth');
Route::get('/formaddstatetnispend', 'profildesacontroller@formaddstatetnispend')->middleware('auth');
Route::get('/formaddstatagamapend', 'profildesacontroller@formaddstatagamapend')->middleware('auth');


Route::get('/formeditberita/{id}', 'web_controller@formeditberita')->middleware('auth');
Route::get('/formeditpengumuman/{id}', 'web_controller@formeditpengumuman')->middleware('auth');


Route::get('/formeditjmlpend/{id}', 'profildesacontroller@formeditjmlpend')->middleware('auth');
Route::get('/formeditstatpendidikanpend/{id}', 'profildesacontroller@formeditstatpendidikanpend')->middleware('auth');
Route::get('/formeditstatpekerjaanpend/{id}', 'profildesacontroller@formeditstatpekerjaanpend')->middleware('auth');
Route::get('/formeditstatetnispend/{id}', 'profildesacontroller@formeditstatetnispend')->middleware('auth');
Route::get('/formeditstatagamapend/{id}', 'profildesacontroller@formeditstatagamapend')->middleware('auth');



Route::get('/formuploadapbd/{id}', 'web_controller@formuploadapbd')->middleware('auth');



// delete rute
Route::get('/deleteberita/{id}', 'web_controller@deleteberita');
Route::get('/deletepengumuman/{id}', 'web_controller@deletepengumuman');


Route::get('/deletejmlpend/{id}', 'profildesacontroller@deletejmlpend');
Route::get('/deletestatpendidikanpend/{id}', 'profildesacontroller@deletestatpendidikanpend');
Route::get('/deletestatagamapend/{id}', 'profildesacontroller@deletestatagamapend');
Route::get('/deletestatpekerjaanpend/{id}', 'profildesacontroller@deletestatpekerjaanpend');
Route::get('/deletestatetnispend/{id}', 'profildesacontroller@deletestatetnispend');


Route::get('/detailberita/{id}', 'web_controller@detailberita');
Route::get('/detailpengumuman/{id}', 'web_controller@detailpengumuman');



//post
Route::post('/addberita', 'web_controller@addberita');
Route::post('/addpengumuman', 'web_controller@addpengumuman');


Route::post('/addjmlpend', 'profildesacontroller@addjmlpend');
Route::post('/addstatpendidikanpend', 'profildesacontroller@addstatpendidikanpend');
Route::post('/addstatagamapend', 'profildesacontroller@addstatagamapend');
Route::post('/addstatpekerjaanpend', 'profildesacontroller@addstatpekerjaanpend');
Route::post('/addstatetnispend', 'profildesacontroller@addstatetnispend');


Route::post('/editberita/{id}', 'web_controller@editberita');
Route::post('/editpengumuman/{id}', 'web_controller@editpengumuman');


Route::post('/editjmlpend/{id}', 'profildesacontroller@editjmlpend');
Route::post('/editstatpendidikanpend/{id}', 'profildesacontroller@editstatpendidikanpend');
Route::post('/editstatagamapend/{id}', 'profildesacontroller@editstatagamapend');
Route::post('/editstatpekerjaanpend/{id}', 'profildesacontroller@editstatpekerjaanpend');
Route::post('/editstatetnispend/{id}', 'profildesacontroller@editstatetnispend');


Route::post('/uploadapbd/{id}', 'web_controller@uploadapbd');





//Route file

Route::get('apbd', 'web_controller@apbd');
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');
