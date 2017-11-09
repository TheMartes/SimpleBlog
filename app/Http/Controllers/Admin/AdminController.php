<?php

namespace App\Http\Controllers\Admin;

use App\Settings;
use App\Post;
use App\Http\Requests\UpdateSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function posts()
    {
        $posts = Post::get();
        return view('admin.post.index', compact('posts'));
    }

    public function settings()
    {
        $settings = Settings::get();
        return view('admin.settings')->with('settings', $settings);
    }

    public function settingsUpdate(Request $request)
    {
        $options = Settings::get();

        for($id = 1; $id <= count($options); $id++)
        {
            $option = Settings::findOrFail($id);
            $option->value = request($option->key); # @TODO
            $option->save();
        }

        session()->flash('success', 'Settings were updated');
        return redirect('admin/settings');
    }

}
