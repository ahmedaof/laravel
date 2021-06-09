<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\clothesController ;
use App\Models\Clothe;
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
    $clothes = Clothe::all();
    return view('home',[
         'clothes' => $clothes,
     ]);
   
});
Route::get('/clothes','clothesController@index')->name('clothes.index');
Route::get('/clothes/create','clothesController@create')->name('clothes.create')->middleware('auth');
Route::get('/clothes/edit/{id}','clothesController@edit')->name('clothes.edit')->middleware('auth');
Route::put('/clothes/update/{id}','clothesController@update')->name('clothes.update')->middleware('auth');

Route::post('/clothes','clothesController@store')->name('clothes.store')->middleware('auth');
Route::get('/clothes/{id}','clothesController@show')->name('clothes.show')->middleware('auth');
Route::delete('/clothes/{id}','clothesController@destroy')->name('clothes.destroy')->middleware('auth');


Auth::routes([
    'register'=> false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
