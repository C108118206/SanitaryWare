<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" />
    @livewireStyles

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

</head>


<body class="font-sans antialiased  bg-gray-100">
    <x-jet-banner />

    <div class="min-h-screen">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer>
            @include('layouts/footer')
        </footer>
    </div>

    @stack('modals')

    @livewireScripts

    <script>
        $(document).ready(function() {

            var init = true;
            $('#searchBtn').on('click', function() {
                if (init) {
                    $('#title').css({
                        opacity: 0
                    }).slideDown("slow").animate({
                        opacity: 1
                    });
                    init = false;
                } else {
                    $("#searchBox").submit();
                }

            });
        });
    </script>

</body>

</html>
