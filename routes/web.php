<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// Default route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for the TestController index method
Route::get('/test', [TestController::class, 'index']);
