<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.frontend.style')
</head>

<body>
    {{-- START: NAVBAR --}}
    @include('includes.frontend.navbar-b')
    {{-- END: NAVBAR --}}

    {{-- START : MAIN CONTENT --}}
    @yield('content')
    {{-- END : MAIN CONTENT --}}

</body>

</html>
