<?php
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PlanController;
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
Route::get('/about', function () {
    return view('about');
});

Route::get('/briefcase', function () {
    return view('briefcase');
});
Route::get('/proposito', function () {
    return view('proposito');
});
Route::get('/multimedia', function () {
    return view('multimedia');
});
Route::get('/world', function () {
    return view('world');
});
Route::get('/comunidad', function () {
    return view('comunidad');
});

Route::resource('personas', PersonaController::class);
Route::resource('plans', PlanController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
