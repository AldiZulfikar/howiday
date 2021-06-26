<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Howiday - Edit Profile</title>

    <link rel="stylesheet" href="{{ asset('./ijabo-crop-tool/ijaboCropTool.min.css') }}">
    @include('includes.frontend.style')
</head>

<body>
    @include('includes.frontend.navbar-a')

    {{-- START: CONTENT --}}
    <section class="edit-profile container mx-auto px-5 lg:px-0 mb-28">
        <div class="flex flex-col lg:flex-row items-start">
            @include('includes.frontend.edit-user')
            @yield('content')
        </div>
    </section>
    {{-- END: CONTENT --}}

    @include('includes.frontend.footer')

    @include('includes.frontend.script')

    <script src="{{ asset('ijabo-crop-tool/ijaboCropTool.min.js') }}"></script>
    {{-- <script>
        $('#_userAvatarFile').ijaboCropTool({
            preview: '.user_picture',
            processUrl: '{{ route('edit-profile.crop') }}',
            withCSRF: ['_token', {{ csrf_token() }}],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });

    </script> --}}

</body>

</html>
