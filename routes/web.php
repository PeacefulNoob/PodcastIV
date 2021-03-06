<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('sezona','SezonaController');  
Route::resource('epizoda','EpizodaController');  
Route::resource('post','PostsController');  
Route::resource('comments','CommentController');  

Route::get('/', 'SezonaController@index');

Route::get('/podcast/{id}', 'SezonaController@podcast');
Route::get('/singleBlog', function () {
  
    return view('site.blog_info');
});
Route::get('/noSeason', function () {
    $epizode = App\Epizoda::all();
    return view('site.noSeason',compact('epizode'));
});
Route::get('/contact', "ContactController@create");
Route::post('Podcast Website', [
    'uses' => 'ContactController@store',
    'as' => 'contact.store.main'
]);
Auth::routes();

Route::post('/post/{post}/comments' , 'CommentController@store');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () {
        Route::get('/', 'HomeController@index')->name('admin');
        Route::get('/comments', 'HomeController@comments')->name('comments');
        Route::get('/post/showUserBlogs/{id}', 'PostsController@showUserBlogs');

    }
);
