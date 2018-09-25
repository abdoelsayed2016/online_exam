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
});