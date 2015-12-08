<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Awesome Code, Great Job! | Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>
<body>

    <div class="row">
        <div class="small-12 columns">
            @if(count($errors))
                <div class="callout alert">
                    <ul>
                        @foreach($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    @yield('content')


    <script src="{{ asset('js/all.js') }}"></script>
    <script>
        $(document).foundation();
    </script>

</body>
</html>