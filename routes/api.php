<?php

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



/*
||--------------------------------------------------------------------------
|| test Routes
||--------------------------------------------------------------------------
|*/
use App\Http\Controllers\Api\v1\TestController;

Route::prefix('v1')->group(function () {
    Route::get('test', [TestController::class, 'GetAllTests']);
    Route::get('test/{ID}', [TestController::class, 'GetTest']);
    Route::get('test/{ID}/{Column}/{Column1}}', [TestController::class, 'GetByColumn']);

    Route::Post('test', [TestController::class, 'PostTest']);
    Route::Post('test/{ID}/{Column}/{Column1}}', [TestController::class, 'PostTest1']);
    Route::Post('test/{ID}/{Column}/{Column1}}', [TestController::class, 'PostTest2']);

    Route::Put('test', [TestController::class, 'PutTest']);

    Route::Delete('test', [TestController::class, 'DeleteTest']);
});


/*
||--------------------------------------------------------------------------
|| test1 Routes
||--------------------------------------------------------------------------
|*/
use App\Http\Controllers\Api\v1\Test1Controller;

Route::prefix('v1')->group(function () {
    // Route::get('test1', [Test1Controller::class, 'GetAllTests']);
});