@extends('layouts.app')

@section('content')
    
    <!-- Section Home -->
    <section id="home" class="shrink-0 w-full h-[calc(100vh-72px)] text-center content-center snap-start ">
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            
            <main class="flex w-full flex-col max-w-5xl sm:flex-row rounded-lg">
                
                <div class="shrink text-center content-center text-[13px] leading-[20px] flex-1 sm:p-6 pb-12 p-5 lg:pt-0">
                    
                    <h1 class="mb-1 font-bold text-3xl sm:text-4xl md:text-5xl text-white text-left">
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
                <div class="h-50 mx-3 grow max-w-100">
                    <div class="border border-white overflow-hidden w-full flex rounded outline outline-offset-1 outline-white">
                    <div class="bg-white rounded-l p-2 text-xs text-left border-l border-y border-gray-500">

                        <span class="inline-block text-sm font-bold">JeffreyZeller</span><br />
                        <div class="flex">
                            <div class="w-full">
                                <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Dashboard</span><br />
                                <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Blog</span><br />
                                <span class="inline-block py-0 px-2 mb-1 bg-slate-400 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Portfolio</span><br />
                                <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Clients</span><br />
                                <span class="inline-block py-0 px-2 mb-1 bg-slate-200 hover:bg-slate-400 w-full cursor-pointer rounded-xs">Settings</span><br />
                            </div>

                            
                        </div>

                    </div>
                    <div class="bg-slate-500 w-full sm:w-100 rounded-r p-1 border-r border-y border-gray-500">
                        <h2 class="text-left text-white font-bold">Portfolio<div class="bg-white aspect-square rounded-full h-4 float-right text-xs text-black pl-[5px]">x</div></h2>
                        <div class="bg-white w-full h-70 rounded text-left p-2 grid grid-cols-2 gap-2">
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

    <!-- Section Services -->
    <section id="services" class="w-full min-h-screen content-center bg-slate-900/90 p-5 snap-start ">
        <h2 class="text-4xl text-center text-neutral-200 font-bold py-5">Services</h2>
        <div class="grid sm:grid-cols-3 lg:grid-cols-3 lg:max-w-4xl mx-auto gap-3">
            <div>
                <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('images/web-development.png') }})] bg-center bg-contain rounded-t">
                    
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
                <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('images/system-administration.png') }})] bg-center bg-contain rounded-t">
                    
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
                <div class="bg-neutral-200 aspect-square mx-auto bg-[url({{ asset('images/technical-support.png') }})] bg-center bg-contain rounded-t">
                    
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
    <section class="w-full min-h-screen text-center content-center bg-blue-800/50 bg-[url({{ asset('images/portfolio-bg.jpg') }})] bg-cover bg-center bg-fixed bg-blend-overlay snap-start">
        
        <h2 id="portfolio" class="text-4xl text-white font-bold leading-[5rem]">PORTFOLIO</h2>    
        <span class="md:hidden text-white">Scroll Right to view more.</span>            
        
        <div class="lg:max-w-5xl mx-5 sm:mx-auto">
            
            <div class="flex sm:grid sm:grid-cols-3 md:gap-3 snap-x overflow-x-scroll md:overflow-hidden snap-mandatory w-full mx:auto md:p-3">
                @foreach($portfolio as $result)
                <div data-modal-target="portfolio-{{ $result->id }}" data-modal-toggle="portfolio-{{ $result->id }}" class="shrink-0 bg-blue-900 text-white grid w-full lg:w-auto snap-center my-3 duration-100 rounded-xl shadow hover:cursor-pointer hover:outline-blue-200 hover:outline-2 hover:outline-offset-4">
                    <div class="w-full aspect-square bg-black bg-[url({{ asset('storage/' . $result->image) }})] bg-center bg-cover bg-no-repeat bg-top rounded-t-xl">
                        
                    </div>
                    <div class="p-5 font-bold rounded-b text-left">
                        {{ $result->title }}<br />
                        
                        @foreach($result->tags as $tag)
                        <span class="bg-blue-500 text-xs text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="w-full h-screen bg-indigo-900/95 text-center content-center snap-start">
        <h2 class="text-4xl text-white font-bold mb-5">CONTACT</h2>
        <div class="max-w-lg mx-auto text-left">
            @if (session('status'))
                <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('status') }}
                    </div>
                        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                    </div>
            @endif
            <form id="contact-form" class="p-5" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                @method('POST')
                <div>
                    <input type="text" name="name" type="text" class="w-full rounded-t-lg mb-3 @error('name') is-invalid @enderror" placeholder="Name" class="">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" name="email" type="email" class="w-full mb-3 @error('email') is-invalid @enderror" placeholder="email@addr.ess">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <textarea type="text" name="message" class="w-full @error('message') is-invalid @enderror" placeholder="Message" rows="5"></textarea>
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="bg-blue-700 text-white rounded-b-lg p-3 w-full" 
                type="submit">Submit</button>
                
            </form>
        </div>
        
    </section>
<!-- Portfolio Modal -->
@foreach($portfolio as $result)
<div id="portfolio-{{ $result->id }}" tabindex="-1" aria-hidden="true" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center max-w-full md:inset-0 h-[calc(100%)] bg-black/75">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-blue-950 rounded-lg  dark:bg-gray-700 shadow-lg shadow-slate-950">
            <!-- Modal body -->
            <div class="md:p-5 sm:flex text-white">
                <div>
                    <img class="w-full rounded-t-lg sm:rounded-lg" src="{{ asset('storage/' . $result->image) }}">
                </div>
                <div class="p-5">
                    <button type="button" class="absolute right-3 top-3 text-gray-400 bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="portfolio-{{ $result->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <h3 class="text-xl font-semibold text-white dark:text-white">{{ $result->title }}</h3>
                    <span class="text-sm font-light">{{ $result->url }}</span><br />
                    <div>
                        {{ $result->description }}
                    </div>

                    <!-- Modal footer -->
                    <div class="font-bold rounded-b text-left sm:absolute bottom-5">
                        @foreach($result->tags as $tag)
                        <span class="bg-blue-500 text-xs text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection