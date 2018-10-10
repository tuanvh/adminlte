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
//
//Route::get('/admin', function () {
//   return view('admin.dashboard.index');
//})->name('admin.dashboard');
//
//Route::get('/users', function () {
//   return view('admin.users.index');
//})->name('admin.users');
//
//Route::get('/lives', function () {
//    return view('admin.lives.index');
//})->name('admin.lives');
/**
 * // Matches The "/admin/*" URLs
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin::'], function () {
    /**
     * Admin Access
     */
    //Route::group(['middleware' => 'admin'], function () {
        /**
         * Admin Index
         * // Route named "admin::index"
         */
        Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);

        /**
         * Manage Users.
         * // Routes name "admin::users.*"
         */
        Route::resource('users', 'UsersController');
        /**
         * Manage Lives.
         * // Routes name "admin::lives.*"
         */
        Route::resource('lives', 'LivesController');
    //});
});
