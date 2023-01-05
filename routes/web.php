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
Route::get('/login', function () {
    return view('index');
});

Route::get('/add_category', function () {
    return view('add_category');
});

Route::get('/add_item', function () {
    return view('add_item');
});

Route::get('/update_item', function () {
    return view('update_item');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('insert','App\Http\Controllers\CategoryInsertController@insertform');
Route::post('create','App\Http\Controllers\CategoryInsertController@insert');

Route::get('view_category','App\Http\Controllers\CategoryViewController@index');

Route::get('insert','App\Http\Controllers\ItemInsertController@insertform');
Route::post('create_item','App\Http\Controllers\ItemInsertController@insert');

Route::get('view_item','App\Http\Controllers\ItemViewController@index');

//Route::get('insert','App\Http\Controllers\ItemUpdateController@updateform');
Route::get('update_item/{id}','App\Http\Controllers\ItemUpdateController@updateform');

//Route::get('delete-records','App\Http\Controllers\ItemDeleteController@index');
Route::get('delete/{id}','App\Http\Controllers\ItemDeleteController@destroy');


