@extends('app_template')

@section('content')

    @if(count($posts))
    
        @foreach($posts as $post)
            {{ $post->title }}
            {{ $post->body }}
        @endforeach

    @else

        <h1>No posts published yet.</h1>

    @endif

@endsection