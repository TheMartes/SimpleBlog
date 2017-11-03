@extends('app_template')

@section('content')

    @if(count($posts))

        @foreach($posts as $post)

            <div class="article">
              <div class="title-img"><img src="../image/title-img.jpg" alt="title image"></div>
              <div class="title"><a href="/post/{{ $post->slug }}"><h4>{{ $post->title }}</h4></a></div>
              <div class="author">Written by <strong>{{ $post->author }}</strong>&nbsp; &#124; &nbsp;{{ $post->created_at->toFormattedDateString() }}</div>
            </div>

        @endforeach

    @else

        <h1>No posts published yet.</h1>

    @endif

@endsection
