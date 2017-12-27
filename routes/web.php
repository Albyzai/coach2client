<?php



Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog', 'PostsController@index')->name('blog');




Route::get('posts/{post}', 'PostsController@show');

Route::post('posts/{post}/create', 'CommentsController@store');

Route::get('author/{user}', 'AuthorsController@show');

Route::get('home', 'DashboardController@index')->name('dashboard');

Route::get('profile', 'UserController@index')->name('profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store_user');
Route::post('register/trainer', 'RegistrationController@store_trainer');

Route::get('login', 'SessionsController@create');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'SessionsController@destroy');

Route::get('trainers', 'TrainersController@index')->name('trainers');
Route::get('trainers/{user}', 'TrainersController@profile');
Route::get('test', 'TrainersController@test');
Route::post('search', 'TrainersController@search');

Route::group(['middleware' => 'can:accessAdmin'], function(){
    Route::get('/admin', 'AdminController@index');


    //Admin posts
    Route::get('/admin/posts', 'AdminController@posts');
    Route::delete('/admin/posts/{id}', 'PostsController@destroy');
    Route::post('/admin/posts', 'PostsController@store');
    Route::get('/admin/posts/create', 'PostsController@create');



    //Admin pages
    Route::get('/admin/pages', 'AdminController@pages');
    Route::delete('/admin/pages/{id}', 'PagesController@destroy');
    Route::get('/admin/pages/{id}', 'PagesController@edit');
    Route::put('/admin/pages/{id}', 'PagesController@update');

    //Admin users
    Route::get('/admin/users', 'AdminController@users');

    //Admin tags
    Route::get('/admin/tags', 'TagController@index');

});

Route::get('{slug}', 'PageController@show');

/*Route::get('{slug}', ['uses' => 'PageController@show'])->where('slug', '([A-Za-z0-9\-\/]+)');*/

