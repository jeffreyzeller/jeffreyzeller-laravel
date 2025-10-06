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
  <body>
    <!-- Navigation -->
    <nav class="bg-slate-900/98 border-gray-200 dark:bg-gray-900 absolute sticky top-0 z-45">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://www.jeffreyzeller.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- <img src="#" class="h-8" alt="Jeffrey Zeller Logo" /> -->
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white font-mono text-white">jeffreyzeller.com</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-slate-700 md:flex-row md:space-x-1 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white/10 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li class="px-3 py-2">
                <a href="#home"  class="block text-neutral-50 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                <li class="px-3 py-2">
                <a href="#services" class="block text-neutral-50 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                </li>
                <li class="px-3 py-2">
                <a href="#portfolio" class="block text-neutral-50 rounded-sm  md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a>
                </li>
                <li class="px-3 py-2">
                <a href="#contact" class="block text-neutral-50 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="w-full bg-[url({{ asset('/images/stage.jpg') }})] bg-fixed bg-bottom bg-cover transform-gpu h-[calc(100vh-72px)] overflow-y-scroll snap-y snap-mandatory absolute top-[72] left-0">

        <!-- Section Main -->
        <section id="home" class="shrink-0 w-full h-[calc(100vh-72px)] text-center content-center snap-start ">
            <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
                <main class="flex w-full flex-col max-w-4xl lg:flex-row rounded-lg">
                    <div class="text-center content-center text-[13px] leading-[20px] flex-1 sm:p-6 pb-12 p-5 lg:p-20">
                        <h1 class="mb-1 font-bold xs:text-4xl text-5xl text-white text-left">
                            Custom Built<br />
                            Administrative &amp Client Panels<br />

                        </h1>
                        <p class="mb-2 text-neutral-100 font-semibold text-left text-base font-mono">Every business is different in design, I make Web Applications that are tailored for the individual needs of your business.</p>
                        <ul class="flex flex-col mb-4 lg:mb-6 text-white">
                            <li class="flex items-center gap-4 py-2">
                                <span class=" py-1">
                                    <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                        <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                    </span>
                                </span>
                                <span>
                                    See my
                                    <a href="#portfolio" target="_self" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                        <span>Portfolio</span>
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" class="w-2.5 h-2.5"><path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square" /></svg>
                                    </a>
                                </span>
                            </li>
                            <li class="flex items-center gap-4 py-2">
                                <span class=" py-1">
                                    <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                        <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                    </span>
                                </span>
                                <span>
                                    My 
                                    <a href="#services" target="_self" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                        <span>Services</span>
                                        <svg width="10" height="11" viewBox="0 0 10 11" fill="none" class="w-2.5 h-2.5"><path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor" stroke-linecap="square" /></svg>
                                    </a>
                                </span>
                            </li>
                        </ul>
                        <ul class="flex gap-3 text-sm leading-normal">
                            <li>
                                <a href="#contact" target="_self" class="inline-block dark:bg-slate-800 dark:border-slate-500 dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 shadow-neutral-950/90 shadow-sm border-black bg-slate-900 text-white">
                                    Contact Me
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="h-50 mx-3 lg:w-2/5">
                        <div class="border border-white overflow-hidden w-full flex rounded outline outline-offset-1 outline-white">
                        <div class="bg-white rounded-l p-2 text-xs text-left border-l border-y border-gray-500">

                            <span class="inline-block text-sm font-bold">Acme Inc</span><br />
                            <div class="flex">
                                <div class="">
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Dashboard</span><br />
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-400 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Blog</span><br />
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Products</span><br />
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Orders</span><br />
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Customers</span><br />
                                    <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Settings</span><br />
                                </div>

                                
                            </div>

                        </div>
                        <div class="bg-slate-500 w-full sm:w-100 rounded-r p-1 border-r border-y border-gray-500">
                            <h2 class="text-left text-white font-bold">Blog<div class="bg-white aspect-square rounded-full h-4 float-right"></div></h2>
                            <div class="bg-white w-full h-41 rounded text-left p-2 grid grid-cols-3 gap-2">
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                                <div class="bg-slate-200 p-5 rounded-xs"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                </main>
            </div>
        </section>

        <!-- Section Services -->
        <section id="services" class="w-full min-h-screen content-center bg-slate-900/90 p-5 snap-start ">
            <h2 class="text-4xl text-center text-neutral-200 font-bold py-5">Services</h2>
            <div class="grid lg:grid-cols-3 lg:max-w-4xl mx-auto gap-3">
                <div>
                    <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('/images/web-development.png') }})] bg-center bg-contain rounded-t">
                        
                    </div>
                    <div class="bg-slate-700 text-white p-3 rounded-b">
                    <h3 class="font-bold text-xl hidden">Web Development</h3>
                    <p class="font-light">Web Applications</p>
                    <p class="font-light">API Integrations</p>
                    <p class="font-light">Lead Generation Pages</p>
                    <p class="font-light">PageSpeed Optimization</p>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('/images/system-administration.png') }})] bg-center bg-contain rounded-t">
                        
                    </div>
                    <div class="bg-slate-700 text-white p-3 rounded-b">
                    <h3 class="font-bold text-xl hidden">System Administration</h3>
                    <p class="font-light">Host Setup / Maintenance</p>
                    <p class="font-light">Recovery</p>
                    <p class="font-light">Network Administration</p>
                    <p class="font-light">Consultation</p>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('/images/technical-support.png') }})] bg-center bg-contain rounded-t">
                        
                    </div>
                    <div class="bg-slate-700 text-white p-3 rounded-b">
                    <h3 class="font-bold text-xl hidden">Technical Support</h3>
                    <p class="font-light">Computer Diagnostics</p>
                    <p class="font-light">Systems Tuneup / Optimization</p>
                    <p class="font-light">Data Recovery</p>
                    <p class="font-light">Software Installation</p>
                    </div>
                </div>
            </div>
            <div class="lg:max-w-4xl mx-auto text-neutral-200 p-5 text-center content-center">

                <a class="bg-slate-500/80 w-full px-3 py-2 mx-auto text-xl lg:leading-[5rem]">Free Estimation</a>

            </div>
            
            
        </section>
        
        <!-- Section Portfolio -->
        <section class="w-full min-h-screen text-center content-center bg-blue-800/50 bg-[url({{ asset('/images/portfolio-bg.jpg') }})] bg-cover bg-center bg-fixed bg-blend-overlay snap-start">
            
            <h2 id="portfolio" class="text-4xl text-white font-bold leading-[5rem]">PORTFOLIO</h2>    
            <span class="md:hidden text-white">Scroll Right to view more.</span>            

            <div class="lg:max-w-5xl mx-5 sm:mx-auto">
                
                <div class="flex md:grid md:grid-cols-3 md:gap-3 snap-x overflow-x-scroll md:overflow-hidden snap-mandatory w-full mx:auto md:p-3">
                    <div data-modal-target="malose-modal" data-modal-toggle="malose-modal" class="shrink-0 bg-blue-900 text-white grid w-full lg:w-auto snap-center my-3 duration-100 rounded-xl shadow hover:cursor-pointer hover:outline-blue-200 hover:outline-2 hover:outline-offset-4">
                        <div class="w-full aspect-square bg-black bg-[url({{ asset('/images/portfolio/malose.png') }})] bg-center bg-cover bg-no-repeat bg-top rounded-t-xl">
                            
                        </div>
                        <div class="p-5 font-bold rounded-b text-left">
                            Malose<br />
                            <span class="bg-blue-500 text-xs text-white px-2 py-1 rounded-full">TailWindCSS</span>
                        </div>
                    </div>
                    <div class="shrink-0  grid w-full place-items-center snap-center my-3 duration-100 bg-neutral-200 shadow hover:cursor-pointer hover:shadow-neutral-500 hover:outline-blue-950 hover:outline-4 hover:outline-offset-4">
                        <div class="w-full aspect-square bg-neutral-500">

                        </div>
                        <div class="py-5 font-bold">
                            Packmule
                        </div>
                    </div>
                    <div class="shrink-0  grid w-full place-items-center snap-center my-3 duration-100 bg-neutral-200 shadow hover:cursor-pointer hover:shadow-neutral-500 hover:outline-blue-950 hover:outline-4 hover:outline-offset-4">
                        <div class="w-full aspect-square bg-neutral-500">

                        </div>
                        <div class="py-5 font-bold">
                            Car Buyer
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="w-full h-screen bg-indigo-900/95 text-center content-center snap-start">
            <h2 class="text-4xl text-white font-bold">CONTACT</h2>
            <div class="max-w-xl mx-auto">
            </div>
            
        </section>
    </div>
    <footer>   
    </footer>

    <!-- Malose Modal -->
    <div id="malose-modal" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center max-w-full md:inset-0 h-[calc(100%)] bg-black/75">
        <div class="relative p-4 w-full max-w-4xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-blue-950 rounded-lg shadow-sm dark:bg-gray-700 shadow shadow-lg shadow-slate-950">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t dark:border-gray-600 border-slate-900">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        www.malose.ca
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="malose-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <img src="./assets/images/portfolio/malose.png">
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 rounded-b">
                    <span class="bg-blue-500 text-sm text-white px-3 pt-1 rounded-full">TailWindCSS</span>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://elfsightcdn.com/platform.js" async></script>
    <div class="elfsight-app-708553fe-5e5d-4f26-92bd-4a1f5833ea13" data-elfsight-app-lazy></div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
  </body>
</html>