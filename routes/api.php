<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

Route::middleware('auth:api')->prefix('v1')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/authors', AuthorController::class);
    Route::apiResource('/books', BookController::class);
    //  Route::post('/authors', [AuthorController::class, 'store']);
    //  Route::get('/authors/{author}', [AuthorController::class, 'show']);
    //  Route::get('/authors', [AuthorController::class, 'index']);
});

//authors/{author}
//for one specific author