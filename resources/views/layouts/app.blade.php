<!doctype html>
<html class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Jeffrey Zeller | Freelance Web Developer</title>
    <style>
        .active {
            background: color-mix(in oklab, var(--color-gray-900) 20%, transparent);
        };
    </style>
    </head>
    <body class="bg-[url({{ asset('images/bg-wave.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark.svg') }})] bg-cover no-repeat bg-top">
        @include('layouts.nav')
        <div class="w-full overflow-y-scroll snap-y snap-mandatory fixed top-[72] left-0  h-[calc(100vh-72px)]">
        @yield('content')
        </div>
        @include('layouts.footer')
        <script src="https://elfsightcdn.com/platform.js" async></script>
        <!-- <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div> -->
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>