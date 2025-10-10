<!doctype html>
<html class="scroll-smooth overflow-y-scroll md:snap-y md:snap-mandatory">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jeffrey Zeller | Freelance Web Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .flip {
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
        }
    </style>
    </head>
    <body>
        @include('layouts.nav')

        @yield('hero')

        @yield('content')

        <!-- Section Contact -->
        @include('home.contact')
        
        @include('layouts.footer')
        <!-- <script src="https://elfsightcdn.com/platform.js" async></script> -->
        <!-- <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div> -->

</html>