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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group( [ 'prefix' => '/admin', 'middleware' => [ 'auth' ] ], function () {
    Route::prefix( 'courses' )->group( function () {

        Route::get( '/', 'admin\CoursesController@index' )->name( 'courses.index' );

        Route::get( '/create', 'admin\CoursesController@create' )->name( 'courses.create' );

        Route::post( '/store', 'admin\CoursesController@store' )->name( 'courses.store' );

        Route::get( '/{product}/show', 'admin\CoursesController@show' )->name( 'courses.show' );

        Route::get( '/{product}/edit', 'admin\CoursesController@edit' )->name( 'courses.edit' );

        Route::put( '/{product}/update', 'admin\CoursesController@update' )->name( 'courses.update' );

        Route::delete( '/{product}/destroy', 'admin\CoursesController@destroy' )->name( 'courses.destroy' );
    } );

    Route::prefix( 'faclities' )->group( function () {

        Route::get( '/', 'admin\FaclitiesController@index' )->name( 'faclities.index' );

        Route::get( '/create', 'admin\FaclitiesController@create' )->name( 'faclities.create' );

        Route::post( '/store', 'admin\FaclitiesController@store' )->name( 'faclities.store' );

        Route::get( '/{faculty}/show', 'admin\FaclitiesController@show' )->name( 'faclities.show' );

        Route::get( '/{faculty}/edit', 'admin\FaclitiesController@edit' )->name( 'faclities.edit' );

        Route::put( '/{faculty}/update', 'admin\FaclitiesController@update' )->name( 'faclities.update' );

        Route::delete( '/{faculty}/destroy', 'admin\FaclitiesController@destroy' )->name( 'faclities.destroy' );
    } );
    Route::prefix( 'departments' )->group( function () {

        Route::get( '/', 'admin\DepartmentsController@index' )->name( 'departments.index' );

        Route::get( '/create', 'admin\DepartmentsController@create' )->name( 'departments.create' );

        Route::post( '/store', 'admin\DepartmentsController@store' )->name( 'departments.store' );

        Route::get( '/{department}/show', 'admin\DepartmentsController@show' )->name( 'departments.show' );

        Route::get( '/{department}/edit', 'admin\DepartmentsController@edit' )->name( 'departments.edit' );

        Route::put( '/{department}/update', 'admin\DepartmentsController@update' )->name( 'departments.update' );

        Route::delete( '/{department}/destroy', 'admin\DepartmentsController@destroy' )->name( 'departments.destroy' );
    } );
    Route::prefix( 'students' )->group( function () {

        Route::get( '/', 'admin\StudentsController@index' )->name( 'students.index' );

        Route::get( '/create', 'admin\StudentsController@create' )->name( 'students.create' );

        Route::post( '/store', 'admin\StudentsController@store' )->name( 'students.store' );

        Route::get( '/{student}/show', 'admin\StudentsController@show' )->name( 'students.show' );

        Route::get( '/{student}/edit', 'admin\StudentsController@edit' )->name( 'students.edit' );

        Route::put( '/{student}/update', 'admin\StudentsController@update' )->name( 'students.update' );

        Route::delete( '/{student}/destroy', 'admin\StudentsController@destroy' )->name( 'students.destroy' );

        Route::post( '/get/department', 'admin\StudentsController@getDepartment' )->name( 'students.getDepartment' );
    } );
    Route::prefix( 'IlosType' )->group( function () {

        Route::get( '/', 'admin\IlosTypeController@index' )->name( 'IlosType.index' );

        Route::get( '/create', 'admin\IlosTypeController@create' )->name( 'IlosType.create' );

        Route::post( '/store', 'admin\IlosTypeController@store' )->name( 'IlosType.store' );

        Route::get( '/{ilosType}/show', 'admin\IlosTypeController@show' )->name( 'IlosType.show' );

        Route::get( '/{ilosType}/edit', 'admin\IlosTypeController@edit' )->name( 'IlosType.edit' );

        Route::put( '/{ilosType}/update', 'admin\IlosTypeController@update' )->name( 'IlosType.update' );

        Route::delete( '/{ilosType}/destroy', 'admin\IlosTypeController@destroy' )->name( 'IlosType.destroy' );
    } );
    Route::prefix( 'questionType' )->group( function () {

        Route::get( '/', 'admin\QuestionTypeController@index' )->name( 'questionType.index' );

        Route::get( '/create', 'admin\QuestionTypeController@create' )->name( 'questionType.create' );

        Route::post( '/store', 'admin\QuestionTypeController@store' )->name( 'questionType.store' );

        Route::get( '/{quetype}/show', 'admin\QuestionTypeController@show' )->name( 'questionType.show' );

        Route::get( '/{quetype}/edit', 'admin\QuestionTypeController@edit' )->name( 'questionType.edit' );

        Route::put( '/{quetype}/update', 'admin\QuestionTypeController@update' )->name( 'questionType.update' );

        Route::delete( '/{quetype}/destroy', 'admin\QuestionTypeController@destroy' )->name( 'questionType.destroy' );
    } );
    Route::prefix( 'semester' )->group( function () {

        Route::get( '/', 'admin\SemesterController@index' )->name( 'semester.index' );

        Route::get( '/create', 'admin\SemesterController@create' )->name( 'semester.create' );

        Route::post( '/store', 'admin\SemesterController@store' )->name( 'semester.store' );

        Route::get( '/{semester}/show', 'admin\SemesterController@show' )->name( 'semester.show' );

        Route::get( '/{semester}/edit', 'admin\SemesterController@edit' )->name( 'semester.edit' );

        Route::put( '/{semester}/update', 'admin\SemesterController@update' )->name( 'semester.update' );

        Route::delete( '/{semester}/destroy', 'admin\SemesterController@destroy' )->name( 'semester.destroy' );
    } );
});
