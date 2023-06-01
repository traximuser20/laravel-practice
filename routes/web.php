<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello/{name}', function ($name) {
//     return view('hello', ['name' => $name]);
// });

Route::get('hello', [UserController::class, 'loadView']);

Route::view('/contact', 'contact');

Route::get("user", [UserController::class, 'show']);

Route::post("forms", [FormController::class, 'getData']);
Route::view("forms", "forms");