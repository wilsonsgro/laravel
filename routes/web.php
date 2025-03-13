<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getname', [TestController::class, 'getNames']);
Route::get('/testfacade', [TestController::class, 'testFacade']);