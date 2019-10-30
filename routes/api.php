<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
<<<<<<< HEAD
    return $request->user();
});
=======

    return $request->user();
});


Route::apiResources(['user' => 'API\UserController']);
>>>>>>> 034f624a8f90e69bcb845dd7deb2a2130fe5410f
