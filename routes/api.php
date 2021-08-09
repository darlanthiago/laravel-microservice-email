<?php

use App\Jobs\CompanyCreated;
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

Route::get('/', function () {
    return response()->json([
        'message' => 'success',
        'application' => env("APP_NAME"),
    ]);
});


Route::get('/test', function () {

    CompanyCreated::dispatch('example@email.com')
        ->onQueue('queue_email');

    return response()->json([
        'message' => 'success',
    ]);
});
