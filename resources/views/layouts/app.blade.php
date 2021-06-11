<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Material Icons --}}
    @include('includes.frontend.style')
</head>

<body>
    {{-- START: NAVBAR --}}
    @include('includes.frontend.navbar-a')
    {{-- END: NAVBAR --}}

    @yield('content')

    {{-- START: FOOTER --}}
    @include('includes.frontend.footer')
    {{-- END: FOOTER --}}


    @include('includes.frontend.script')
</body>

</html>
