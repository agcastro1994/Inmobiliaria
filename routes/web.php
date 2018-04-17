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

// Route::get('/home', function () {
//     return view('main/index');
// });

Route::get('/home', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/images', 'ImagesController@create');

Route::get('/posts/main-images', 'ImagesController@createMain');

Route::post('/posts', 'PostController@store');

Route::post('/images', 'ImagesController@store');

Route::post('/main-images', 'ImagesController@storeMain');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts/edit/{post}', 'PostController@edit');

Route::get('/posts/delete/{post}', 'PostController@delete');




// Route::get('images/{archive}', function ($archive) {
//      $public_path = public_path('uploads');
//      $url = $public_path.$archivo;
//      //verificamos si el archivo existe y lo retornamos
//      if (Storage::exists($archivo))
//      {
//        return response()->download($url);
//      }
//      //si no se encuentra lanzamos un error 404.
//      abort(404);
 
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
