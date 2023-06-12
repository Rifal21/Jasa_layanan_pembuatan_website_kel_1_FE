<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/layanan', function () {
    return view('layanan', [
        'title' => 'Layanan'
    ]);
});
Route::get('/layanandet', function () {
    return view('layanandet', [
        'title' => 'Layanan Detail'
    ]);
});

Route::get('/login' , [LoginController::class , 'index']);
Route::get('/register' , [RegisterController::class , 'index']);
Route::post('/auth/register' , [RegisterController::class , 'store']);
