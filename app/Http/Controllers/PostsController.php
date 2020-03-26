<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = \Illuminate\Support\Facades\DB::table('post')->where('slug', $slug)->first();

        //dd($post);
    
        return view('post', [
            'post' => $post // ?? 'Nothing here.'
        ]);
    }
}
