<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
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
Route::get('/Home', function () {
    return view('welcome');
});

//admin routes
Route::get('/admin/login', function () {
    return view('admin.login.index');
});
Route::post('/admin/auth', [AdminController::class, 'login']);

//client routes
Route::get('/myaccount/home', [UserController::class, 'myaccountHome']);

//social routes
Route::get('/social/create', [SocialController::class, 'create']);
Route::post('/social', [SocialController::class, 'store']);
Route::post('/social/delete', [SocialController::class, 'destroy']);
//User Routes
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/register', [UserController::class, 'store'])->name('user.register');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

//services
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/services/create', [ServicesController::class, 'create']);
Route::post('/services', [ServicesController::class, 'store']);
Route::post('/services/delete/', [ServicesController::class, 'destroy']);

//order routes
Route::get('/order', [OrderController::class, 'index']);
Route::post('/order/selected_service', [OrderController::class, 'SelectedServiceStore']);
Route::get('/order/create', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'store']);

//blog routes
Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/blog/{id}', [PostController::class, 'show']);
Route::put('/blog/{id}', [PostController::class, 'update']);
Route::post('/posts', [PostController::class, 'store' ]);
Route::get('/posts/delete/{id}', [PostController::class, 'destroy']);


//comment routes
Route::get('/comment', [CommentController::class, 'index']);
Route::get('/comment/{id}', [CommentController::class, 'show']);
Route::put('/comment/{id}', [CommentController::class, 'update']);
Route::post('/comment', [CommentController::class, 'store' ]);
Route::delete('/comment/{id}', [CommentController::class, 'destroy']);

//wiki routes
Route::get('/wiki', [WikiController::class, 'index']);
Route::get('wiki/create', [WikiController::class, 'create']);
Route::get('/wiki/{id}', [WikiController::class, 'show']);
Route::get('/wiki/keyword/{id}', [WikiController::class, 'searchByKey']);
Route::post('/wiki', [WikiController::class, 'store']);
Route::post('/wiki/delete', [WikiController::class, 'destroy']);
