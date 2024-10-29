<?php

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PencatatanKalkulasiController;
=======
use App\Http\Controllers\GuideController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("guides", GuideController::class);
>>>>>>> dev-zan

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
<<<<<<< HEAD

Route::apiResource('kalkulasi', PencatatanKalkulasiController::class);
=======
>>>>>>> dev-zan
