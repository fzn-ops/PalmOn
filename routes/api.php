<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PencatatanKalkulasiController;
use App\Http\Controllers\GuideController;

Route::apiResource("guides", GuideController::class);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('kalkulasi', PencatatanKalkulasiController::class);

