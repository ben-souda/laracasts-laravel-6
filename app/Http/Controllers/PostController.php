<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function show($post){
        $posts = [
            'my-first-post' => 'hello salim'
        ];
        if (! array_key_exists($post, $posts)){
            abort(404, 'sorry that post was not found');
        }
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
