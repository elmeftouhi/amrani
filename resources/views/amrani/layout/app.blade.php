<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="" style="font-family: 'Nunito', sans-serif;">
        <div class="h-full bg-gray-100 overflow-hidden flex">
                <!-- Vertical Menu -->
                @include('amrani.layout.vertical_menu')
                <!-- Page Content -->
                <main class="bg-white flex-1 overflow-y-auto">
                    <!-- Header -->
                    @include('amrani.layout.header')
                    <!-- Content -->
                    @yield('content')
                </main>
        </div>
    </body>
</html>
