<!doctype html>
<html class=" scroll-smooth overflow-y-scroll md:snap-y md:snap-mandatory">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Jeffrey Zeller | Freelance Web Developer</title>
    <style>
        .fill-white {
            fill: #FFFFFF
        }
        .active {
            background: color-mix(in oklab, var(--color-gray-900) 20%, transparent);
        }
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
    <body class=" bg-blue-50 dark:bg-gray-700 bg-[url('{{ asset('images/body-bg.jpg') }}')] bg-fixed bg-cover bg-center bg-no-repeat bg-blend-multiply">
        
        @yield('content')

        <!-- Section Contact -->
        @include('home.contact')
        
        @include('layouts.footer')
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <!-- <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div> -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>