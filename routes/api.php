<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\SlackController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users', function () {
//     return response()->json(['users' => User::all()]);
// });


// Route::middleware('auth:api')->group(function () {
//     Route::get('/users', [UsersController::class, 'index']);
//     Route::post('/users', [UsersController::class, 'store']);
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/consume', 'App\Http\Controllers\API\SlackController');

// Route::resource('/tasks', TaskController::class);
