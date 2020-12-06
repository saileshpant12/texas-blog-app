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
Route::get('test-email', function () {
    $name = 'Sailesh Pant Changed';
    return new App\Mail\MarkdownEmail($name);
//   \Illuminate\Support\Facades\Mail::to('saileshpant12@gmail.com')->send(new \App\Mail\MarkdownEmail($name));
});

Route::get('dashboard', function () {
   return view('dashboard');
});

Route::get('create-blog', function () {
   return view('create-blog');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
