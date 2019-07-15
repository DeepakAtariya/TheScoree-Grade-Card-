<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is asigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $  request->user();
});


*/
Route::middleware('cors')->group(function(){

    Route::post('/getProfile','ProfileController@onGet');
    
    Route::post('/testData','ProfileController@test');

    Route::post('/saveSignUpData','ProfileController@saveSignUpData');

    Route::post('/verifyenrollment','ProfileController@verifyenrollment');
    Route::post('/feedback','ProfileController@feedback');

    Route::post('/doLogin','ProfileController@doLogin');
    /*
        Route::get('/checKHttp','ProfileController@onTestHttpClient'); for testing purposes
    */
    // Route::get('/checKHttp','ProfileController@onTestHttpClient'); 
    // Route::post('/checKHttp','ProfileController@onTestHttpClient');
    // Route::get('/scores/getScores','ScoresController@getScores');
    Route::post('/scores/getScores','ScoresController@getScores');
    Route::get('scores/test','ScoresController@test');
    Route::post('/scores/getScoresFromDatabase','ScoresController@getScoresFromDatabase');

    // Route::get('/',function(){
    //     return "hey hey";
    // });

});
