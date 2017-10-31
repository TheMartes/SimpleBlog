@extends('app_template')

@section('content')

    <h1>{{ $post->title }}</h1>
    <span><i class="fa fa-clock"></i> {{ $post->created_at }}</span>

    <p>
        {{ $post->body }}
    </p>
    <small>Written by {{ $post->author }}</small>

@endsection
