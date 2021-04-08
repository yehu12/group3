<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\controllers\candidate;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/add',[candidate::class,'addcandidate']);
Route::delete('/delete/{id}',[candidate::class,'deletecandidate']);
Route::put('/update/{id}',[candidate::class,'updatecandidate']);
Route::get('/find/{id}',[candidate::class,'findcandidate']);
Route::get('/show',[candidate::class,'showall']);