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
        <div class="h-full bg-gray-100">
            <!-- Page Content -->
            <div class="wrapper w-full h-full flex">

                <div class="w-48 h-full bg-gradient-to-r from-gray-100 to-gray-200 border-r border-gray-300">
                    <div class="flex items-center border-b border-gray-300 px-4 h-14">
                        <img class="w-8 mr-2" src="http://adminmart.com/src/assets/images/logo-icon.png" alt="">
                        <div class="text-gray-100 text-lg text-gray-800">
                            <span class="font-bold text-sm">Agence</span> 
                            <span class="text-sm">Amrani</span>
                        </div>
                    </div>
                </div>


                <main class="bg-white flex-1">
                    <div class="flex items-center justify-between border-b border-gray-300 h-14">
                        <div class="flex items-center">
                            <button class="p-4 py-5 hover:bg-gray-100 text-lg"><i class="fas fa-bars"></i></button>
                            <div class="rounded-lg border overflow-hidden relative">
                                <input type="text" class="border-0 text-sm w-64" placeholder="Chercher">
                                <button class="absolute top-0 right-0 m-2 pt-1 text-sm text-gray-400"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="rounded-full cursor-pointer hover:bg-red-300 p-2 bg-red-200 m-2 text-gray-500"><i class="far fa-bell"></i></div>
                            <div class="rounded-full cursor-pointer hover:bg-gray-300 p-2 bg-gray-200 m-2"><i class="far fa-user"></i></div>
                        </div>
                    </div>
                    @yield('content')
                </main>                
            </div>

        </div>
    </body>
</html>
