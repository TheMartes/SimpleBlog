@extends('app_template')

@section('content')

    <h1>{{ $user->name }}</h1>
    <h2>{{ $user->email }}</h2>


@endsection
