<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Groups;

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
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/index', function () {
    return view('index');
});

Route::prefix('crud')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('/add', [PostController::class, 'store']);
});

Route::prefix('/foods')->group(function () {

    Route::get('/add', function () {
        return view('add_foods');
    });
});

Route::get('learn', function () {

    return view('learn');
});
Route::get('comments', function () {

    return view('comments');
});
