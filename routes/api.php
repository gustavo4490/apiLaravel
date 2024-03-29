<?php

use App\Http\Controllers\API\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/usuarios',[UsuariosController::class,'index']);
Route::post('v1/usuarios',[UsuariosController::class,'store']);
Route::get('v1/usuarios/{usuario}',[UsuariosController::class,'show']);
Route::put('v1/usuarios/{usuario}',[UsuariosController::class,'update']);
Route::delete('v1/usuarios/{usuario}',[UsuariosController::class,'destroy']);