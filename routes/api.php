<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PageController;

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
 //tutte le rotte presenti in api.php saranno precedute da api/
Route::get('/' ,[PageController::class, 'index']);
Route::get('/tutte-le-tecnologie' ,[PageController::class, 'allTechnology']);
Route::get('/tutte-le-categorie' ,[PageController::class, 'allCategory']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
