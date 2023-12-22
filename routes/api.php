<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function (Request $request, Response $response) {
    return response()->json(['Laravel API Version' => App::version()]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
