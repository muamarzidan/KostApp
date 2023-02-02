<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\masing\AboutkostController;
use App\Http\Controllers\masing\TestmonkostController;
use App\Http\Controllers\masing\FasilikostController;
use App\Http\Controllers\FooterkostController;
use App\Http\Controllers\TestmonController;
use App\Http\Controllers\StokostController;

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

Route::get('/main', function () {
    return view('layouts.main');
});

Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/kost_arnest', function () {
    return view('layouts.kost_arnest');
});
Route::get('/kost_fuad', function () {
    return view('layouts.kost_fuad');
});
Route::get('/kost_ilham', function () {
    return view('layouts.kost_ilham');
});
Route::get('/kost_kombas', function () {
    return view('layouts.kost_kombas');
});




// Route::get('/', function () {
//     return view('welcome');
// });


