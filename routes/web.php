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
*/

/* 前台系统 */
Route::group([
    'namespace' => 'Home'
],function(){
    Route::get('/','IndexController@index');                    //前台首页
    Route::get('index','IndexController@index');                //前台首页
    Route::get('snake','IndexController@snake');                //彩蛋-贪吃蛇
    Route::get('test','IndexController@test');                  //测试页面
    Route::get('mail','IndexController@mail');                  //邮件
    Route::get('login','IndexController@login');                //登录页面
    Route::post('login-do','IndexController@loginDo');          //登录操作
    Route::get('login-out','IndexController@loginOut');         //退出登录
});


/* 后台用户的登录 */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin\\Login\\',
],function(){
    Route::get('login','LoginController@index');                //登录首页
    Route::post('login-do','LoginController@loginDo');          //登录操作
});

/* 后台系统 */
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'admin',
],function(){
    Route::get('index','IndexController@index');                //后台主页
    Route::get('login-out','Login\LoginController@loginOut');   //登出操作

});


