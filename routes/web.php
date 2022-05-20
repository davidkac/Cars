<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\CarsController;
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
    $name = 'David';
    $age = 25;

    return view('welcome', compact('name', 'age'));
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('cars', [CarsController::class, 'index']);

Route::get('cars/{id}', [CarsController::class, 'show']);
