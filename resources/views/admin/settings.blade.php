@extends('admin_template')

@section('content')

    <form class="" action="/admin/settings/update" method="post">

        {{ method_field('PUT') }}
        {{ csrf_field() }}

        @foreach($settings as $option)

            <h2>{{ $option->key }}</h2>
            <input type="text" name="{{ $option->key }}" value="{{ $option->value }}">

        @endforeach

        <button type="submit">Submit</button>

    </form>

@endsection
