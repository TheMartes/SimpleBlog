@extends('admin_template')

@section('content')

    <h1>{{ $section }}</h1>

    @foreach($users as $user)

        <ul>
            <li>{{ $user->name }}</li>
        </ul>

    @endforeach

@endsection
