<?php

use App\Http\Controllers\Auth\Api\LoginController;
use App\Http\Controllers\Auth\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
});

Route::get('teste', function() {

    $string = 'arara';

    $palindromo = false;

    for ($i = 0; $i <= count($string); $i++) {
        echo $string[$i];
    }

});
