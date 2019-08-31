<?php

use Illuminate\Http\Request;


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



Route::get('count','ProfileController@count');

Route::get('gotFeedback','ProfileController@gotFeedback');

Route::post('saveDeviceTokens','NotificationController@saveDeviceTokens')->name('saveDeviceTokens');


