<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $blog = [
            'my-first-post' => 'Hello, this is my first post!',
            'my-second-post' => 'Hi, I am sharing my second post!'
        ];
    
        if (! array_key_exists($post, $blog)) {
            abort(404, 'Sorry, page not found.');
        }
    
        return view('post', [
            'post' => $blog[$post] // ?? 'Nothing here.'
        ]);
    }
}
