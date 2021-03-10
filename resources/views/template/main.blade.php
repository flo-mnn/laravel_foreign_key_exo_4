<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Albums</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="p-5 mb-5 w-100 bg-primary d-flex flex-column justify-content-center align-items-center text-light" height="150">
        <h1>Albums</h1>
        <a href="/albums/create" class="btn btn-light text-primary">Add an album</a>
    </header>
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>