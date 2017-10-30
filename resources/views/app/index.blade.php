@extends('app_template')

@section('content')

    @if(count($posts))

        @foreach($posts as $post)

            <div class="article">
              <div class="title-img"><img src="../image/title-img.jpg" alt="title image"></div>
              <div class="title"><h4>{{ $post->title }}</h4></div>
              <div class="author">Written by <strong>Šimon Benčík</strong>&nbsp; &#124; &nbsp;{{ $post->created_at->toFormattedDateString() }}</div>
            </div>

        @endforeach

    @else

        <h1>No posts published yet.</h1>

    @endif

@endsection
