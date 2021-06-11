<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    @include('includes.frontend.style')

    <style>
        [x-cloak] {
            display: none;
        }

    </style>
</head>

<body>
    {{-- START: NAVBAR --}}
    @include('includes.frontend.navbar-b')
    {{-- END: NAVBAR --}}

    {{-- START: BREADCRUMB --}}
    <section class="breadcrumb container mx-auto mb-20 px-5 lg:px-0">
        <ul class="inline">
            <li class="inline"><a href="/" class="font-poppins text-base hover:underline font-light">Destination</a> /
            </li>
            <li class="inline"><a href="/" class="font-poppins text-base hover:underline font-light">Details</a> /</li>
            <li class="inline"><a href="/" class="font-poppins text-base hover:underline font-semibold">Checkout</a>
            </li>
        </ul>
    </section>
    {{-- END: BREADCRUMB --}}

    {{-- START: TRAVEL CHECKOUT --}}
    @yield('content')
    {{-- END: TRAVEL CHECKOUT --}}

    {{-- START: FOOTER --}}
    @include('includes.frontend.footer')
    {{-- END: FOOTER --}}

    @include('includes.frontend.script')
</body>

</html>
