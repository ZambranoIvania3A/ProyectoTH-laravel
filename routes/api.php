<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//devuelve datos desde el servidor
Route::get('/obtener', function(){
    return 'Has obtenido todos los datos...';
 });

//devuelva unicamente un registro
Route::get('/obtener/{id}', function(){
    return 'Has obtenido solo un resgistro...';
 });


//como podre crear una ruta que me permita almacenar datos en la BD
Route::post('/save', function(){
    return 'Datos guardados de manera exitosa...';
});

Route::put('/actualizar', function(){
    return 'Has actualizado los datos...';
 });

 Route::delete('/eliminar', function(){
    return 'Has eliminado todos los datos...';
 });

 //ruta para  obtener el total de usuarios de la tabla usuario
    Route::get('/usuarios', [UsuarioController::class, 'index']);
    Route::get('/usuarios/{id}', [UsuarioController::class, 'registroUnico']);
    Route::post('/usuario', [UsuarioController::class, 'store']);
    Route::put('/usuario/{id}', [UsuarioController::class, 'update']);
    Route::delete('/usuario/{id}', [UsuarioController::class, 'delete']);



    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
    

