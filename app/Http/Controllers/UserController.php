<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Post;
use App\Mail\InviteMail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'edit', 'update', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        return view('app.user')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(config('mail.username') == NULL)
        {
            session()->flash('error',
            "Your maildriver is not configured. Please configure it in
            application settings, before you make new user. Otherwise
            user will NOT be invited to the blog.");
        }

        $nextId = count(User::get()) + 1;
        return view('admin.user.create')->with('id', $nextId);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        Mail::to([
            'adress' => request()->input('email')
            ])->send(new InviteMail);

        session()->flash('success', 'User was invited.');

        return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $user = User::where('name', '=', $user)->firstOrFail();
        return view('app.user')->with('user', $user);
    }

    /**
     * Display and list all of the resources
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::get();

        return view('admin.list', compact('users'))->with('section', 'Users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('app.user_edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($name)
    {
        DB::table('users')->where('name', $name)->delete();

        if(User::count())
            User::truncate();

        Auth::logout();
        return redirect('/');
    }
}
