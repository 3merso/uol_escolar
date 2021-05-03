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

// cadastro de cursos
Route::resource('courses', 'CourseController');

// cadastro de matrículas
Route::resource('enrollments', 'EnrollmentController');

// cadastro de alunos
Route::resource('students', 'StudentController');