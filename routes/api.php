<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\ApiMiddleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::controller(App\Http\Controllers\ApiController::class)
    ->withoutMiddleware(['auth'])
    ->middleware(ApiMiddleware::class)
    ->group(function () {

        Route::get('users', 'getUsers');
        Route::get('user/{id}', 'getUser');
        Route::post('user', 'setUser');


    });

