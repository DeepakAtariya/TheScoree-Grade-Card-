<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/testForm', function (Request $request) {
    return view('welcome',['name'=> 'Deepak']);
});
*/

// Route::get('/', function () {
    // return "hey!";
// });

Route::prefix('guestdashboard')->group(function () {
	Route::get('*',function (){
		return redirect()->route('home');
	})->name('guest');

});

	Route::get('guestdashboard',function (){
		return redirect()->route('home');
	})->name('guest');


Route::get('',function (){
	return view('index');
})->name('home');

// Route::get('',function (){
	// return view('welcome');
// });