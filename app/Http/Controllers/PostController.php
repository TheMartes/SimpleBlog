<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Post;

class PostController extends Controller
{

    public function __contruct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::get();

        return view('app/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('app/post', compact('post'));
    }

    public function create()
    {
        return view('admin/post/create');
    }

    public function store(StorePost $request)
    {
       Post::Create(request(['title', 'slug', 'body']));

       return redirect('/');
    }

    // Make Update Method

    public function destroy($id)
    {

      $post = Post::findOrFail($id);
      $post->delete();

      $getPosts = Post::get();
      if(!count($getPost)){
        Post::truncate();
      }

    }

}
