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

Route::get('/posts/{post}', function($post) {
   $posts = [
      'my-first-post' => 'googoogog'
   ];
   if (! array_key_exists($post, $posts)){
      abort(404, 'sorry that post was not found');
   }
   return view('post', [
      'post' => $posts[$post]
   ]);
});







