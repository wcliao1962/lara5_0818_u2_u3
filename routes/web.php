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
//    \App\Post::create([
//        'title'=>'test title',
//        'content'=>'test content'
//    ]);

//    $post = new \App\Post();
//    $post->title = 'test title2';
//    $post->content = 'test content2';
//    $post->save();
//    $post = \App\Post::find(1);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//
//    $posts = \App\Post::all();
//    dd($posts);

    $post = \App\Post::find(1);
    foreach($post->comments as $comment) {
        echo $comment->title.'<br>';
    }


//    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/hello/{name?}', ['as'=>'hello.index', 'uses'=>'HelloController@index']);

Route::get('/posts', function (){
   return view('posts.index');
});
Route::get('/posts/about', function (){
    return view('posts.about');
});
Route::get('/posts/post', function (){
    return view('posts.post');
});
