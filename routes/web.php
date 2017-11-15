<?php



Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog', 'PostsController@index')->name('blog');



Route::get('posts/{post}', 'PostsController@show');

Route::post('posts/{post}/create', 'CommentsController@store');

Route::get('author/{user}', 'AuthorsController@show');

Route::get('home', 'DashboardController@index')->name('dashboard');

Route::get('profile', 'UserController@index');
Route::post('profile', 'UserController@update_avatar');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store_user');
Route::post('register/trainer', 'RegistrationController@store_trainer');

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){
    Route::get('/admin', 'AdminController@index');
    Route::get('/admin/posts', 'AdminController@posts');
    Route::delete('/admin/posts/{id}', 'PostsController@destroy');
    Route::post('/admin/posts', 'PostsController@store');
    Route::get('/admin/posts/create', 'PostsController@create');
    
});