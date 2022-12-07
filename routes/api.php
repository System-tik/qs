<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\AuthController;
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

//api authcontroller
Route::post('/auth/create/{mdp}', [AuthController::class,'user']);

//Route all get
Route::get('/products',[apiController::class,'getProduct']);/* ->middleware('auth:sanctum'); */
Route::get('/cats',[ApiController::class,'getCategorie']);/* ->middleware('auth:sanctum'); */

//1|wy3XrzcudyYmSXS2wQVzTDKGKLf7Cnou0UUY4dmP