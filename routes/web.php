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
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/','HomeController@index');

//Route::get('/home', 'HomeController@index')->name('home');





Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin', 'AdminController@index');


	Route::resource('admin/users', 'AdminUsersController', ['names'=>[
        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'edit'=>'admin.users.edit'
    ]]);


    Route::resource('admin/posts', 'AdminPostsController', ['names'=>[
        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'edit'=>'admin.posts.edit',
    ]]);

    Route::resource('admin/categories', 'AdminCategoriesController', ['names'=>[
        'index'=>'admin.categories.index',
        'create'=>'admin.categories.create',
        'edit'=>'admin.categories.edit',
    ]]);




    Route::resource('admin/media', 'AdminMediaController', ['names'=>[
        'index'=>'admin.media.index',
        'create'=>'admin.media.create',
       
    ]]);

    Route::delete('admin/delete/media', [
        'as' =>'admin.delete.media',

        'uses'=>'AdminMediaController@deleteMedia']);

    Route::resource('admin/comments', 'PostCommentsController', ['names'=>[
        'index'=>'admin.comments.index',
        'show'=>'admin.comments.show',
       // 'edit'=>'admin.categories.edit',
    ]]);

        Route::resource('admin/comment/replies', 'CommentRepliesController', ['names'=>[
        'show'=>'admin.comment.replies.show',
       // 'create'=>'admin.media.create',
       // 'edit'=>'admin.categories.edit',
    ]]);

});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/post/{id}', ['as'=>'home.post', 'uses'=>'HomeController@post']);


Route::group(['middleware'=>'auth'], function(){
    Route::post('comment/reply', 'CommentRepliesController@createReply');


});