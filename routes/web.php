<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Auth.index');
})->middleware('alreadyLoggedIn');



Route::controller(AuthController::class)->group(function(){
    Route::post('/Peoplefy', 'Peoplefy')->middleware('alreadyLoggedIn');
    Route::get('/logout', 'logout')->name('logout');
});



Route::controller(CaseStudyController::class)->group(function(){
    Route::get('/casestudylist', 'index')->name('casestudylist')->middleware('isLoggedIn');
    Route::get('/addcasestudy',  'create')->name('addcasestudy')->middleware('isLoggedIn');
    Route::post('/addingcasestudy',  'store')->name('addingcasestudy')->middleware('isLoggedIn');
    Route::get('/updatecasestudy/{id}',  'edit')->name('updatecasestudy')->middleware('isLoggedIn');
    Route::post('/updatingcasestudy',  'update')->name('updatingcasestudy')->middleware('isLoggedIn');
    Route::get('/casestudydetails/{id}',  'show')->name('casestudydetails')->middleware('isLoggedIn');
    Route::get('/deletecasestudy/{id}', 'destroy')->name('deletecasestudy')->middleware('isLoggedIn');
});


Route::controller(BlogController::class)->group(function(){
    Route::get('/bloglist', 'index')->name('bloglist')->middleware('isLoggedIn');
    Route::get('/addblog', 'create')->name('addblog')->middleware('isLoggedIn');
    Route::post('/addingblog', 'store')->name('addingblog')->middleware('isLoggedIn');
    Route::get('/updateblog/{id}', 'edit')->name('updateblog')->middleware('isLoggedIn');
    Route::post('/updatingblog', 'update')->name('updatingblog')->middleware('isLoggedIn');
    Route::get('/blogdetails/{id}', 'show')->name('blogdetails')->middleware('isLoggedIn');
    Route::get('/deleteblog/{id}', 'destroy')->name('deleteblog')->middleware('isLoggedIn');
});
