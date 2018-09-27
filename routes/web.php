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
});
