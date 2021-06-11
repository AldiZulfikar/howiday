<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @stack('addon-style')
    @include('includes.frontend.style')
    @stack('prepend-style')

</head>

<body>
    {{-- START: NAVBAR --}}
    @include('includes.frontend.navbar-a')
    {{-- END: NAVBAR --}}

    {{-- START: TRAVEL DETAILs --}}
    @yield('content')
    {{-- END: TRAVEL DETAILs --}}

    {{-- START: FOOTER --}}
    @include('includes.frontend.footer')
    {{-- END: FOOTER --}}


    @stack('prepend-script')
    @include('includes.frontend.script')
    @stack('addon-script')
</body>

</html>
