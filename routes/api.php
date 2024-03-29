<?php

use Illuminate\Http\Request;

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


Route::get('/test', function () {
    return 'api test';
});

# API v1 Route Group
Route::prefix('v1')->group(function () {

    # Test Group Method
    Route::get('time', function () {
        return date('Y-m-d H:i:s');
    });

    Route::get('phpinfo', function () {
        phpinfo();
    });

    # User API Group
    Route::prefix('user')->group(function () {

        # Get User
        Route::get('/{id}', function ($id) {
            return sprintf("Input ID : %s", $id);
        });

        # Get Users
        Route::get('/', function () {
            return 'This is Get Users (FindMany)';
        });

    });
});