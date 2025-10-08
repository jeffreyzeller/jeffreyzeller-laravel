<!doctype html>
<html>
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
        };
    </style>
    </head>
    <body class="bg-[url({{ asset('images/bg-wave.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark.svg') }})] bg-blue-700 dark:bg-gray-800 bg-cover bg-no-repeat bg-top">
        @include('layouts.nav')
        <div class="scroll-smooth w-full overflow-y-scroll md:snap-y md:snap-mandatory fixed top-[72px] left-0  h-[calc(100vh-72px)]">
        @yield('content')
        </div>
        @include('layouts.footer')
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <!-- <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div> -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        <!-- Portfolio Modals -->
        @include('home.portfolio-modal')
    </body>
</html>