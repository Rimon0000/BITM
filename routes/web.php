<?php
namespace App\Http\Controllers;

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

Route::get('/home', function () {
    return view('backend.home');
});

Route::get('/product', function () {
    return view('backend.product');
});

Route::get('/table', function () {
    return view('backend.table');
});

Route::get('/categories', [CategoryController::class,'index'])->name('categories.index');

Route::get('/categories/create', function () {
    return view('backend.categories.create');
})->name('categories.create');

