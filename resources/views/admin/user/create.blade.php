@extends('admin_template')

@section('content')

@include('partials.sessions')
<!-- K dispozicii premenna ID -->

<form action="/admin/user/store" method="post">

    {{ csrf_field() }}

    <input type="text" name="name" value="">
    <input type="email" name="email" required>
    <button type="submit">Submit</button>

</form>

@endsection
