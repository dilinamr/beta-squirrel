<?php

use App\Http\Controllers\bookscontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [bookscontroller::class, 'index']);
Route::get('/books/create', [bookscontroller::class, 'create']);
Route::post('/books/store', [bookscontroller::class, 'store']);
Route::get('/books/{id}/edit', [bookscontroller::class, 'edit']);
Route::put('/books/{id}/update', [bookscontroller::class, 'update']);
Route::get('/books/{id}/delete', [bookscontroller::class, 'destroy']);
Route::get('/books/{id}/show', [bookscontroller::class, 'show']);
