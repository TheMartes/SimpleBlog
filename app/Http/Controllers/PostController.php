<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use App\Post;
use \Carbon\Carbon;
use DB;
use Illuminate\Session\Store;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $posts = Post::get();

        return view('app.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('app.post', compact('post'));
    }

    public function create()
    {
        return view('admin/post/create');
    }

    public function store(StorePost $request)
    {
        $author = auth()->user()->name;
        $user = request()->input('author');

        if($author != $user)
        {
            return back()->withInput()
                         ->with('error', 'Whoops something went wrong');

        } else {
            Post::Create(request(['title', 'slug', 'author', 'body']));
            return redirect('/');
        }
    }

    public function edit($slug)
    {
        $post = Post::where('slug', '=', $slug);

        return view('admin/post/edit', compact('post'));
    }

    public function update($id)
    {
        $post = Post::findOrFail($id);

        $post->title = request()->input('title');
        $post->slug  = request()->input('slug');
        $post->body  = request()->input('body');

        $post->save();

        return redirect('/');
    }

    public function destroy($id)
    {
      $post = Post::findOrFail($id);
      $post->delete();

      $getPosts = Post::get();
      if(!count($getPosts)){
        Post::truncate();
      }

      return redirect('/');
    }

}
