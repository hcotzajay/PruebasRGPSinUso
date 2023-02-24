<?php

use Illuminate\Support\Facades\Route;

Route::middleware('authRGP')->group(function () {
    Route::GET('/menu', 'UserController@menu');

    ROUTE::POST('/personal/cambiaPIN', 'FirmaE\PINController@cambiaPIN');
    ROUTE::POST('/personal/cambiaPassword', 'UserController@cambiaPassword');

    Route::GET('/logout', 'Auth\LogoutController@logout');
});

Route::POST('/login', 'Auth\LoginController@login');
Route::POST('/login/password-reset', 'Auth\LoginController@passwordReset');

Route::GET('/{any}', function () {
    return view('spa');
})->where('any', '.*');
