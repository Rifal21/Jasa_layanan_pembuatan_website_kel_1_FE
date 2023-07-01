<?php

use App\Models\RoleUser;
use App\Models\Template;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleUserController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardTemplateController;
use App\Http\Controllers\DashboardPortfolioController;

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
Route::get('/tentang', function () {
    return view('tentang', [
        'title' => 'Tentang'
    ]);
});
Route::get('/template', function () {
    return view('template', [
        'title' => 'Template',
        'templates' => Template::all()
    ]);
});
Route::get('/portfolio', function () {
    return view('portfolio', [
        'title' => 'Portofolio',
        'portofolios' => Portfolio::all()
    ]);
});
Route::get('/layanandet', function () {
    return view('layanandet', [
        'title' => 'Layanan Detail'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/users', function () {
    return view('dashboard.users.index');
})->middleware('admin');

Route::resource('/dashboard/roleuser', RoleUserController::class)->middleware('admin');
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/template', DashboardTemplateController::class)->middleware('admin');
Route::resource('/dashboard/portfolio', DashboardPortfolioController::class)->middleware('admin');

Route::get('/login' , [LoginController::class , 'index']);
Route::post('/logout' , [LoginController::class , 'logout']);
Route::post('/auth/login' , [LoginController::class , 'login']);
Route::get('/register' , [RegisterController::class , 'index']);
Route::post('/auth/register' , [RegisterController::class , 'registrasi']);
