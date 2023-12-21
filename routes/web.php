<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('/', function (Request $request, Response $response) {
    return response()->json(['Laravel Version' => App::version()]);
});
