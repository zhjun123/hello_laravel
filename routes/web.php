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

Route::get('/', function () {
    return view('welcome');
});
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Auth')->group(function (){
    Route::get('logout','LoginController@logout');
});

Route::group(['prefix'=>'admins','namespace'=>'admin','middleware' => 'auth'],function (){
    //首页
    Route::get('/','IndexController@index');
    //会员管理
    Route::get('members','MembersController@index');
    //管理员管理
    Route::resource('admins','AdminsController');
    //文章分类
    Route::get('categories','CategoriesController@index');
    //文章管理
    Route::get('articles','ArticlesController@index');
    //权限管理
    Route::get('powers','PowersController@index');
    //角色管理
    Route::get('roles','rolesController@index');

});