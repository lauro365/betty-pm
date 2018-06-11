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

//Ruteos de todos
Route::get('/', function () {
    return view('iniciodesesion');
});

Route::get('/registro', function () {
    return view('registro');
});

//Ruteos de administrador
Route::get('/inicioadmin', function(){
    return view('Inside.Administrador.inicio');
});

Route::get('/analitica', function(){
    return view('Inside.Administrador.analitica');
});

Route::get('/salas', function(){
    return view('Inside.Administrador.salas');
});

Route::get('/catalogoi', function(){
    return view('Inside.Administrador.catalogoi');
});


//Ruteos de empleados
Route::get('/inicioemp', function(){
    return view('Inside.Empleados.inicio');
});

Route::get('/agregarcurso', function(){
    return view('Inside.Empleados.agregarcurso');
});

Route::get('/miscursos', function(){
    return view('Inside.Empleados.miscursos');
});


//Ruteo de instructores
Route::get('/inicioi', function(){
    return view('Inside.Instructor.inicio');
});

Route::get('/miscursosi', function(){
    return view('Inside.Instructor.miscursos');
});

Route::get('/empleadosi', function(){
    return view('Inside.Instructor.empleados');
});

//Another types of Routes

Route::get('/prueba', 'PagesController@index');
Route::resource('/registro','UserRegistration');
Auth::routes();


Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@authenticar');


//Routes Actions from Admin
Route::get('inicioadmin/logout', 'inicioadminController@logout');
Route::resource('inicioadmin', 'inicioadminController');

Route::post('analitica/logout', 'adminanaliticaController@logout');
Route::resource('analitica', 'adminanaliticaController');

Route::get('salas/{id}', 'salasController@salatime');
Route::get('salas/logout', 'salasController@logout');
Route::resource('salas', 'salasController');

Route::get('catalogoi/logout', 'catalogoiController@logout');
Route::resource('catalogoi', 'catalogoiController');


//Routes Actions From Empleado
Route::get('/inicioemp/logout', 'inicioempleadoController@logout');
Route::get('/inicioemp', 'inicioempleadoController@index');

Route::get('/agregarcurso/logout', 'agregarcursoController@logout');
Route::get('/agregarcurso/{id}', 'agregarcursoController@inscripcion');
Route::get('/agregarcurso', 'agregarcursoController@index');

Route::get('/miscursos/logout', 'miscursosController@logout');
Route::get('/miscursos/{id}', 'miscursosController@borrar');
Route::get('/miscursos', 'miscursosController@index');


//Routes Actions From Instructor
Route::get('/inicioi/logout', 'inicioinstructorController@logout');
Route::resource('/inicioi', 'inicioinstructorController');

Route::get('/miscursosi/logout', 'miscursosiController@logout');
Route::resource('/miscursosi', 'miscursosiController');

Route::get('/empleadosi/logout', 'empleadosiController@logout');
Route::resource('/empleadosi', 'empleadosiController');


