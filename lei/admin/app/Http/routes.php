<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//轮播图
Route::any('/',"ImagesController@images");
//新闻
Route::any('introduce',"ImagesController@introduce");
//资讯
Route::any('news',"ImagesController@news");
//八个按钮
Route::any('happy',"ImagesController@happy");
//个人信息
Route::any('people',"ImagesController@people");
//宿舍预定
Route::any('dorm',"ImagesController@dorm");
//抵校登记
Route::any('school',"ImagesController@school");
//绿色通道
Route::any('street',"ImagesController@street");
//推迟报到
Route::any('push',"ImagesController@push");
//我要提问
Route::any('asker',"ImagesController@asker");
//我的提问
Route::any('question',"ImagesController@question");
//资讯解答
Route::any('solve',"ImagesController@solve");
//报到单
Route::any('talk',"ImagesController@talk");
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
