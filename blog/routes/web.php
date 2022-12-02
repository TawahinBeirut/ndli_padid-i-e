<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;

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

Route::get('/register/create', function () {
    return view('/connexion/create');
});

Route::post('/register', [Register::class, 'store']);

