<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetch-lazada-data', [ProductController::class, 'fetchDataFromLazadaAPI']);
