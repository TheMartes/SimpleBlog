@extends('admin_template')

@section('content')



    <form action="/admin/post/validate" method="post">

      {{ csrf_field() }}

      <input type="text" name="title" placeholder="name your article">

      <input type="text" name="slug" placeholder="Set your slug for better SEO">

      <input type="hidden" name="author" value="{{ Auth::user()->name }}">

      <textarea name="body" placeholder="body goes here">

      </textarea>

      <button type="submit">Submit</button>

    </form>

@endsection
