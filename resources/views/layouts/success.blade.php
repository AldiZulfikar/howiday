<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('includes.frontend.style')
</head>

<body class="dark:bg-gray-800">
    @include('includes.frontend.darkmode-toggle')
    {{-- START: NAVBAR --}}
    <div class="dark:bg-gray-800">
        @include('includes.frontend.navbar-b')
    </div>
    {{-- END: NAVBAR --}}

    {{-- START : MAIN CONTENT --}}
    @yield('content')
    {{-- END : MAIN CONTENT --}}

    @include('includes.frontend.script')

</body>

</html>
