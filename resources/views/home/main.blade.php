<section id="home" class="w-full text-center sm:content-center bg-transparent/100 snap-start min-h-[calc(100vh-72px)]">
    <div class="sm:flex items-center justify-center w-full transition-opacity opacity-100 duration-500 lg:grow starting:opacity-0">
        <main class="flex w-full flex-col max-w-5xl sm:flex-row md:p-5 sm:rounded-lg bg-blue-700 dark:bg-gray-800 lg:outline-7 lg:outline-white sm:shadow-gray-700 dark:shadow-gray-800 sm:shadow-xl">
            <div class="shrink text-center content-center flex-1 sm:p-6 pb-12 p-5 lg:pt-0">
                
                <h1 class="mb-1 font-bold text-5xl sm:text-4xl md:text-5xl text-white dark:text-gray-100 text-left">
                    Custom Built<br />
                    Administrative &amp Client Panels
                </h1>
                <p class="mb-2 text-gray-100 dark:text-gray-100 font-semibold text-left text-base font-mono">Every business is different in design, I make Web Applications that are tailored for the individual needs of your business.</p>
                <ul class="flex flex-col mb-4 lg:mb-6 text-white dark:text-gray-100">
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
                <ul class="flex gap-3">
                    <li>
                        <a href="#contact" target="_self" class="inline-block dark:bg-blue-700 dark:border-slate-500 dark:text-[#1C1C1A] dark:hover:bg-blue-600 dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 shadow border-black bg-orange-500 text-white rounded">
                            Contact Me
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mx-3 py-3 sm:py-0 sm:mx-0 grow max-w-100">
                <div class="border border-white overflow-hidden w-full flex rounded outline outline-offset-1 outline-white">
                <div class="bg-white rounded-l p-2 text-xs text-left border-l border-y border-gray-500">

                    <span class="inline-block text-sm font-bold">JeffreyZeller</span><br />
                    <div class="flex">
                        <div class="w-full">
                            <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Dashboard</span><br />
                            <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Blog</span><br />
                            <span class="inline-block py-0 px-2 mb-1 bg-blue-600 dark:bg-gray-800 text-white hover:bg-slate-400 w-full cursor-pointer rounded-xs">Portfolio</span><br />
                            <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Clients</span><br />
                            <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Settings</span><br />
                        </div>
                    </div>
                </div>
                <div class="bg-blue-600 dark:bg-gray-700 w-full sm:w-100 rounded-r p-1 border-r border-y border-gray-500">
                    <h2 class="text-left text-white font-bold">Portfolio<div class="bg-white aspect-square rounded-full h-4 float-right text-xs text-black pl-[5px]">x</div></h2>
                    <div class="bg-white w-full h-50 rounded text-left p-2 grid grid-cols-2 gap-2">
                        @foreach($portfolio as $result)
                        <div class=" bg-[url({{ asset('storage/' . $result->image) }})] bg-cover bg-center p-5 rounded-xs"></div>
                        @endforeach
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