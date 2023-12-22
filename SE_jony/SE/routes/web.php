<?php
use App\Models\movie_info;
use App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Models\memeinfo;
use App\Http\Controllers\MemeController;
use App\Http\Controllers\signinSignupController;
use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\watchPartyController;
Route::get('/', function () {

    return view('login');

});


Route::get('/signup', function () {

    return view('signup');
});

Route::get('/index', 'App\Http\Controllers\HomepageController@index');

Route::get('/streaming', 'App\Http\Controllers\HomepageController@play')->name('streaming');

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/meme', function () {
    return view('meme');
});








Route::get('/api', function () {
    $users = movie_info::all();

    $status = 'OK';

    $data = ["status" => $status, "content" => $users];
    header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	echo json_encode($data); 
});




Route::get('/memeinfo', 'App\Http\Controllers\MemeController@memeinfo')->name('memeinfo');




Route::get('/search','App\Http\Controllers\SearchController@search')->name('search-results');




Route::get('/realsearch', 'App\Http\Controllers\SearchController@searchResults')->name('realsearch');


Route::get('/memes', 'App\Http\Controllers\MemeController@searchResults')->name('memes');
Route::get('/voteupdate', 'App\Http\Controllers\MemeController@voteupdate')->name('voteupdate');

Route::get('/fullmemedatabase', 'App\Http\Controllers\MemeController@fullmemedatabase')->name('fullmemedatabase');
Route::get('/allData', [MemeController::class,'allData']);
Route::get('/vote{time}', [MemeController::class,'vote']);
Route::get('/ckvote{time}', [MemeController::class,'ckvote']);

Route::post('/memestore', [MemeController::class,'memestore']);
Route::get('/searchbar{ss}', [SearchController::class,'searchbar']);

Route::get('/searchRealtime{rr}', [SearchController::class,'searchRealtime']);

Route::get('/searchres', function () {
    
    return view('search');
});

Route::get('/gotoviewprofile', function () {
    
    return view('viewprofile');
})->name('gotoviewprofile');

Route::post('/signupdata', [signinSignupController::class,'signup']);

Route::post('/logindata', [signinSignupController::class,'login']);

Route::get('/profileAllData', [profileController::class,'allData']);

Route::post('/setPrivacy', [profileController::class,'setPrivacy']);
Route::post('/remove', [profileController::class,'remove']);

Route::get('/profilEdit', [profileController::class,'profilEdit']);
Route::post('/editprofile', [profileController::class,'editprofile']);
Route::get('/searchAllData', [SearchController::class,'searchAllData']);
Route::post('/viewprofile', [profileController::class,'viewprofile']);

Route::get('/viewprofileAllData', [profileController::class,'viewprofileAllData']);

Route::get('/addFriend', [profileController::class,'addFriend']);
Route::get('/nameShow', [profileController::class,'nameShow']);


Route::get('/firendlist', [profileController::class,'firendlist']);
Route::get('/friendrequest', [profileController::class,'friendrequest']);

Route::post('/confirm', [profileController::class,'confirm']);

Route::post('/unfriend', [profileController::class,'unfriend']);

Route::post('/loadDetails', [homepageController::class,'loadDetails']);
Route::post('/addWatchlist', [profileController::class,'addWatchlist']);
Route::post('/addFavorites', [profileController::class,'addFavorites']);
Route::get('/watchparty', function () {
   
    return view('watchparty');
});

Route::post('/addWatchparty', [watchPartyController::class,'addWatchparty']);
Route::get('/loadwatchPartydata', [watchPartyController::class,'loadwatchPartydata']);

Route::get('/removeWatchparty', [watchPartyController::class,'removeWatchparty']);
Route::get('/viewwatchparty', function () {
   
    return view('viewwatchparty');
});

Route::post('/chatstore', [watchPartyController::class,'chatstore']);

Route::post('/loadWatchParty', [watchPartyController::class,'loadWatchParty']);


Route::post('/watchpartyend', [watchPartyController::class,'watchpartyend']);

Route::post('/starttime', [watchPartyController::class,'starttime']);
