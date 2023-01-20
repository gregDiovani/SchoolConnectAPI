<?php

use App\Http\Controllers\API\NilaiSiswaController;
use App\Http\Controllers\API\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





    Route::apiresource('/siswa',SiswaController::class);

    Route::apiresource('/nilai',NilaiSiswaController::class);


    
    // Route::get('/',[SiswaController::class,'index']);
    // Route::post('/create',[SiswaController::class,'store']);
    // Route::post('/nilai/create',[SiswaController::class,'store']);
    // Route::get('/nilai/{nis}',[NilaiSiswaController::class,'showNilaiSiswa']);

    




