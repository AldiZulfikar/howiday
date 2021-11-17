<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Howiday</title>

    {{-- Material Icons --}}
    @include('includes.frontend.style')
</head>

<body class="dark:bg-gray-800 body">

    @include('includes.frontend.darkmode-toggle')

    {{-- <div class="bottom-10 right-10 fixed ">
        <input type="checkbox" class="checkbox" id="chk" />
        <label class="darkmode dark:bg-gray-300" for="chk">
            <i class="fas fa-moon"></i>
            <i class="fas fa-sun"></i>
            <div class="ball bg-white dark:bg-gray-400"></div>
        </label>
    </div> --}}

    {{-- @include('includes.frontend.darkmode-toggle') --}}
    {{-- START: NAVBAR --}}
    <div class="bg-white dark:bg-gray-800 w-full h-24 shadow-sm fixed z-20">
        @include('includes.frontend.navbar-a')
    </div>
    {{-- END: NAVBAR --}}
    <div class="mt-40">
    </div>
    @yield('content')

    {{-- START: FOOTER --}}
    @include('includes.frontend.footer')
    {{-- END: FOOTER --}}


    @include('includes.frontend.script')
</body>

</html>
