<?php

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

Route::get('/', [App\Http\Controllers\front_end\HomeController::class, 'Index'])->name('home');

Route::prefix('user')->group(function () {
    /*
     * Login
     */
    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'Login'])->name('user.login.get');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('user.login.post');

    /*
     * Reg
     */
    Route::get('/reg', [App\Http\Controllers\Auth\RegisterController::class, 'Reg'])->name('user.reg.get');
    Route::post('/reg', [App\Http\Controllers\Auth\RegisterController::class, 'regPost'])->name('user.reg.post');


    /*
     * Profile
     */
    Route::get('/profile', [App\Http\Controllers\front_end\UserController::class, 'showProfile'])->name('user.profile')->middleware('auth');


    /*
     * Logout
     */
    Route::get('/logout', function (){
        Auth::logout();
        return back();
    })->name('user.logout');
});
