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
// Route::get('guestdashboard',function (){
// 	return redirect()->route('home');
// })->name('guest');


Route::get('',function (){
	return view('index');
	// return "view('index')";
})->name('home');

Route::get('home',function (){
	return view('index');
	// return "view('index')";
})->name('home');

Route::get('about',function (){
	return view('about');
	// return "view('index')";
})->name('about');

Route::get('contribute',function (){
	return view('contribute');
	// return "view('index')";
})->name('contribute');

Route::get('privacypolicy',function (){
	return view('privacypolicy');
	// return "view('index')";
})->name('privacypolicy');

Route::get('contactus',function (){
	return view('contactus');
	// return "view('index')";
})->name('contactus');


Route::get('disclaimer',function (){
	return view('disclaimer');
	// return "view('index')";
})->name('disclaimer');

Route::get('malik/addprogram',function (){
	return view('notes/addprogram');
})->name('notes/addprogram');

Route::get('termendresults',function (){
	return view('termendform');
})->name('termendresults');



Route::get('notes/addprogram','NotesCollectionController@addprogram')->name('notes/addprogram');
Route::get('notes/getCourses','NotesCollectionController@getCourses')->name('notes/getCourses');
Route::get('notes/expert','NotesCollectionController@expert')->name('notes/expert');
Route::post('notes/submit_notes','NotesCollectionController@submitNotes')->name('notes/submit_notes');


Route::post('getGradeCard','ScoresController@getGradeCard')->name('getGradeCard');
Route::get('scores','ScoresController@scores')->name('scores');
Route::post('submit_contactus','FeedbackController@feedback')->name('submit_contactus'); 

Route::get('termend','TermEndController@termend');


// admin
Route::get('moderate',function (){
	return view('admin/index');
})->name('moderate');

Route::post('moderator/login','NotesModerateController@login')->name('moderator/login');
Route::get('moderator/logout','NotesModerateController@logout')->name('moderator/logout');
Route::get('moderator/dashboard','NotesModerateController@dashboard')->name('moderator/dashboard')->middleware('auth');
Route::get('moderator/edit_notes','NotesModerateController@edit_notes')->name('moderator/edit_notes')->middleware('auth');
Route::get('moderator/view_notes','NotesModerateController@view_notes')->name('moderator/view_notes')->middleware('auth');
Route::get('moderator/view_sample','NotesModerateController@view_sample')->name('moderator/view_sample')->middleware('auth');
Route::get('moderator/publish_note','NotesModerateController@publish_note')->name('moderator/publish_note')->middleware('auth');
Route::get('moderator/unpublish_note','NotesModerateController@unpublish_note')->name('moderator/unpublish_note')->middleware('auth');
Route::post('moderator/update_notes','NotesModerateController@update_notes')->name('moderator/update_notes')->middleware('auth');


// Route::get('/test',function (){
//     return "Asdasd";
// })->name('test');

// Route::get('',function (){
	// return view('welcome');
// });

Route::get('most_occurring','TermEndController@calculate');

Route::get('download_score','ScoresController@downloadScore')->name('download_score');
Route::get('populate','NotificationController@populate')->name('populate')->middleware('auth');


Route::get('coming_soon',function(){
	return view('coming_soon');
})->name('coming_soon');

// Notes view
Route::get('notes','NotesController@notes')->name('notes');





