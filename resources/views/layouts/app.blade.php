<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TaskList</title>
    </head>

    <body>
        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        @yield('content')
    </body>
</html>