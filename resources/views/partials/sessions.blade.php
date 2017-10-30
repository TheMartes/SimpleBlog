@if(session('success'))

    <p>{{ Session::get('success') }}</p>

@elseif(session('error'))

    <p>{{ Session::get('error') }}</p>

@endif