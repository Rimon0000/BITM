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


// echo env("APP_URL");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('backend.home');
});

Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');

// Route::get('/categories/create', function () {
//     return view('backend.categories.create');
// })->name('categories.create');

Route::get('/product', function () {
    return view('backend.product');
});


