@extends('layouts.app')

@section('content')
<section id="services" class="snap-start bg-slate-100 text-slate-900 dark:bg-slate-950 dark:text-white  bg-[url({{ asset('images/bg-wave-trans.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans.svg') }})] bg-cover bg-no-repeat bg-bottom py-24 px-6 transition-colors duration-300  min-h-[calc(100vh-72px)]">
            
    <div class="flex relative max-w-5xl mx-auto text-gray-900 dark:text-white">
        <div>
            <img class="w-full rounded-t-lg sm:rounded-lg" src="{{ asset('storage/' . $portfolio->image) }}">
        </div>
        <div class="p-5">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $portfolio->title }}</h3>
            <span class="text-sm font-light">{{ $portfolio->url }}</span><br />
            <div>
                
                {!! str($portfolio->description)->sanitizeHtml() !!}

            </div>

            <!-- Modal footer -->
            <div class="font-bold rounded-b text-left sm:absolute bottom-5">
                @foreach($portfolio->tags as $tag)
                <span class="bg-blue-500 text-xs text-white px-2 py-1 rounded-full">{{ $tag }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection