<!doctype html>
<html lang="en" class="dark scroll-smooth overflow-y-scroll md:snap-y md:snap-mandatory">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeffrey Zeller | Freelance Web Developer</title>
    <link rel="icon" href="{{ asset('images/logo/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/logo/icon-512.png') }}">
    <img src="{{ asset('images/logo/logo.svg') }}" alt="Jeffrey Zeller Logo" class="h-8 w-auto">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
    </head>
    <body class="min-h-screen relative overflow-x-hidden text-gray-900 dark:text-gray-100">
        @include('layouts.nav')

        @yield('hero')

        @yield('content')

        <!-- Section Contact -->
        @include('home.contact')
        
        @include('layouts.footer')
        <!-- <script src="https://elfsightcdn.com/platform.js" async></script> -->
        <!-- <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div> -->
        
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
    
</html>