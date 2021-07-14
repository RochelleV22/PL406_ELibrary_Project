<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontEndController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/',function(){

    return view('index');
});
*/
//Route for User Dashboard

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('/user_index');
})->name('dashboard');
Route::get('/user_index',[FrontEndController::class, 'User_Index']); 

//Route for All users
Route::get('/index',[FrontEndController::class, 'Index']); 

//Sign in and Sign Up routes
Route::get('/sign_in',[FrontEndController::class, 'signin']); 
Route::get('/sign_up',[FrontEndController::class, 'signup']); 
Route::get('/user_index',[FrontEndController::class, 'logout']);
Route::get('/our_services',[FrontEndController::class,'services']); 
Route::get('/News',[FrontEndController::class,'news']); 

//Route::get('/Books_Media',[FrontEndController::class,'books_media']); 
Route::get('/Books',[FrontEndController::class,'view']); 
Route::get('/Magazine',[FrontEndController::class,'m_view']); 
Route::get('/Audio',[FrontEndController::class,'a_view']); 
Route::get('/Video',[FrontEndController::class,'v_view']); 

//download and view links for books
Route::get('/view',[FrontEndController::class,'show']); 
Route::get('/download/{file}',[FrontEndController::class,'download_book']); 
Route::get('/book_view/{id}',[FrontEndController::class,'view_book']); 

//download and view links for magazines

Route::get('/m_view',[FrontEndController::class,'m_show']); 
Route::get('/m_download/{file}',[FrontEndController::class,'download_magazine']); 
Route::get('/magazine_view/{id}',[FrontEndController::class,'view_magazine']); 

//download and view links for Audios
Route::get('/a_view',[FrontEndController::class,'a_show']); 
Route::get('/a_download/{file}',[FrontEndController::class,'download_audio']); 
Route::get('/audio_view/{id}',[FrontEndController::class,'view_audio']); 

//upload and download and view links for Videos
Route::get('/v_view',[FrontEndController::class,'v_show']); 
Route::get('/v_download/{file}',[FrontEndController::class,'download_video']);
Route::get('/video_view/{id}',[FrontEndController::class,'view_video']); 

//Routes for registered User View

//Route::get('/user_view',[FrontEndController::class,'user_show']); 
Route::get('/download/{file}',[FrontEndController::class,'download_book']);
//Route::get('/user_m_view',[FrontEndController::class,'user_m_show']); 
Route::get('/m_download/{file}',[FrontEndController::class,'download_magazine']);
//Route::get('/user_a_view',[FrontEndController::class,'user_a_show']); 
Route::get('/user_a_download/{file}',[FrontEndController::class,'download_audio']);  
//Route::get('/user_v_view',[FrontEndController::class,'user_v_show']); 
Route::get('/v_download/{file}',[FrontEndController::class,'download_video']);
//Route::post('/contactpost',[FrontEndController::class,'contactPost']);


//registered User Routes
Route::get('/UserBooks',[FrontEndController::class,'user_books']); 
Route::get('/UserMagazine',[FrontEndController::class,'user_magazine']); 
Route::get('/UserAudio',[FrontEndController::class,'user_audio']); 
Route::get('/UserVideo',[FrontEndController::class,'user_video']);

///contact us page
Route::get('/contact_us',[FrontEndController::class,'get_contact']); 
Route::post('/contactpost',[FrontEndController::class,'save_contact']);

//search
Route::get('/search',[FrontEndController::class,'search']);