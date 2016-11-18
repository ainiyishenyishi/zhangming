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
//首页
Route::get('/',"ShowController@index");
//自助报到
Route::any('report',"ShowController@report");
//绿色通道
Route::any('green',"ShowController@green");
//抵消登记
Route::any('arrive',"ShowController@arrive");
//推迟报到
Route::any('delay',"ShowController@delay");
//入学须知
Route::any('must',"ShowController@must");
//通知公告
Route::any('notice',"ShowController@notice");
//资料下载
Route::any('data',"ShowController@data");
//咨询帮助
Route::any('ask',"ShowController@ask");
//自动入学
Route::any('entrance',"StudyController@entrance");
//用户中心
Route::any('center',"UserController@center");
//个人信息
Route::any('info',"UserController@info");
//宿舍预定
Route::any('into',"UserController@into");
//到学路线
Route::any('street',"studyController@street");
//报到单
Route::any('check',"UserController@check");
//我要提问
Route::any('need',"StudyController@need");
//常见问题
Route::any('see',"StudyController@see");
//我的提问
Route::any('asker',"StudyController@asker");
//资讯解答
Route::any('question',"StudyController@question");

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
