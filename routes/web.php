<?php


use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'namespace' => 'admin', 'middleware' =>['auth','admin']], function(){
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('tag','TagController');
});

Route::group(['prefix'=>'author', 'namespace' => 'author', 'middleware' =>['auth','author']], function(){
    Route::get('dashboard','DashboardController@index')->name('author.dashboard');

});
Route::view('test','frontend.home');
Route::view('test2','admin.dashboard');
