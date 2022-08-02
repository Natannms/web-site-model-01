<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\WikiController;
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


//blog routes
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{id}', [PostController::class, 'show']);
Route::put('/blog/{id}', [PostController::class, 'update']);
Route::post('/blog', [PostController::class, 'store' ]);
Route::delete('/blog/{id}', [PostController::class, 'destroy']);


//comment routes
Route::get('/comment', [CommentController::class, 'index']);
Route::get('/comment/{id}', [CommentController::class, 'show']);
Route::put('/comment/{id}', [CommentController::class, 'update']);
Route::post('/comment', [CommentController::class, 'store' ]);
Route::delete('/comment/{id}', [CommentController::class, 'destroy']);

//wiki routes
Route::get('/wiki', [WikiController::class, 'index']);
Route::get('/wiki/{id}', [WikiController::class, 'show']);
Route::get('/wiki/keyword/{id}', [WikiController::class, 'searchByKey']);
