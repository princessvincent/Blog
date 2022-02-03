<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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

// Route::get('users/', function () {
//     return ('how are you');
// });

// Route::get('users/', function () {
// return response()->json([
//     'name'=> 'prisca',
//     'age' => 21,
//     'occupation' => 'student'

// ]);
// });
// Route::get('/products', [productsController::class, 'index']);
// Route::get('users/', function () {
// return redirect('/');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PagesController::class, 'index']);
 Route::resource('/blog', PostsController::class);

 Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

