<?php

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
// Route::get('/home', function () {
//     return view('home.index');
// });
// Route::view('/home', 'home.index');

// Route::get('/home', function () {
//     return redirect('/home/dashboard');
// });

Route::get('/home', function () {
    return view('home.index');
});
Route::get('/login', function () {
    return view('credentials.login');
});
Route::get('/signup', function () {
    return view('credentials.signin');
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
