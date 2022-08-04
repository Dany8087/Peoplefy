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
});

Route::post('/Peoplefy',[AuthController::class, 'Peoplefy']);



Route::controller(CaseStudyController::class)->group(function(){
    Route::get('/casestudylist', 'casestudylist')->name('casestudylist');
    Route::get('/addcasestudy',  'addcasestudy')->name('addcasestudy');
    Route::post('/addingcasestudy',  'addingcasestudy')->name('addingcasestudy');
    Route::get('/updatecasestudy',  'updatecasestudy')->name('updatecasestudy');
    Route::post('/updatingcasestudy',  'updatingcasestudy')->name('updatingcasestudy');
    Route::get('/casestudydetails',  'casestudydetails')->name('casestudydetails');
});


Route::controller(BlogController::class)->group(function(){
    Route::get('/bloglist', 'bloglist')->name('bloglist');
    Route::get('/addblog', 'addblog')->name('addblog');
    Route::post('/addingblog', 'addingblog')->name('addingblog');
    Route::get('/updateblog', 'updateblog')->name('updateblog');
    Route::post('/updatingblog', 'updatingblog')->name('updatingblog');
    Route::get('/blogdetails', 'blogdetails')->name('blogdetails');
});
