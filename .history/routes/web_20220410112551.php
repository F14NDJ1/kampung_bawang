<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| php artisan route:cache = jika controller tidak ditemukan
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['middleware' => ['auth']], function () {

    //Route for admin
    Route::get('/admin/home', function () {
        return view('admin/home');
    });

    /* Edit profile */
    Route::get('/admin/edit_profile', function () {
        return view('admin/edit_profile');
    });
    Route::get('/admin/edit_profile/update/{id}', [UserController::class, 'update']);

    /* User List  */
    Route::get('/admin/user_list', [UserController::class, 'list']);
    Route::get('/admin/read', [UserController::class, 'read']);
    Route::get('/admin/create', [UserController::class, 'create']);
    Route::get('/admin/store', [UserController::class, 'store']);

    //Route for user
    Route::get('/user/home', function () {
        return view('user/home');
    });
});
