@if(count($errors))

    @foreach($errors->all() as $error)

        <ol>
            <li>{{ $error }}</li>
        </ol>

    @endforeach

@endif