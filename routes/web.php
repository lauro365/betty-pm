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
Route::post('/', 'LoginController@authenticate');


//Routes Actions from Admin

//Route::post('/inicioadmin', 'LoginController@logout');
Route::post('inicioadmin/logout', 'inicioadminController@logout');
Route::resource('inicioadmin', 'inicioadminController');

Route::post('analitica/logout', 'adminanaliticaController@logout');
Route::resource('analitica', 'adminanaliticaController');

Route::post('salas/logout', 'salasController@logout');
Route::resource('salas', 'salasController');

Route::post('catalogoi/logout', 'catalogoiController@logout');
Route::resource('catalogoi', 'catalogoiController');


//Routes Actions From Empleado
Route::post('/inicioemp', 'inicioempleadoController@logout');
Route::resource('/inicioemp', 'inicioempleadoController');

Route::post('/agregarcurso', 'agregarcursoController@logout');
Route::resource('/agregarcurso', 'agregarcursoController');

Route::post('/miscursos', 'miscursosController@logout');
Route::resource('/miscursos', 'miscursosController');


//Routes Actions From Instructor
Route::post('/inicioi', 'inicioinstructorController@logout');
Route::resource('/inicioi', 'inicioinstructorController');

Route::post('/miscursosi', 'miscursosiController@logout');
Route::resource('/miscursosi', 'miscursosiController');

Route::post('/empleadosi', 'empleadosiController@logout');
Route::resource('/empleadosi', 'empleadosiController');


