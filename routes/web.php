<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getname', [TestController::class, 'getNames']);
Route::get('/testfacade', [TestController::class, 'testFacade']);

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('/addmintest', function () {
    return view('admin.test', ['name' => 'James']);
});