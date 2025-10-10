@extends('layouts.app')

@section('content')
<section id="services" class="snap-start bg-slate-100 text-slate-900 dark:bg-slate-950 dark:text-white  bg-[url({{ asset('images/bg-wave-trans.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans.svg') }})] bg-cover bg-no-repeat bg-bottom py-24 px-6 transition-colors duration-300  min-h-[calc(100vh-72px)]">
            
    <div class="flex relative max-w-5xl mx-auto text-gray-900 dark:text-white">
        <div>
            <img class="w-full rounded-t-lg sm:rounded sm:shadow-lg" src="{{ asset('storage/' . $portfolio->image) }}">
            
        </div>
        
        <div class="p-5">
            <a href="{{ $portfolio->url }}"><x-heroicon-s-link class="float-right inline w-4 mr-1" /></a>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ $portfolio->title }}</h3>
            
            <div class="font-bold rounded-b text-left pt-5">
                @foreach($portfolio->tags as $tag)
                            <span class="inline-block px-2 py-1 mb-1 bg-slate-200 dark:bg-slate-700 text-xs text-slate-700 dark:text-slate-300 rounded">{{ $tag }}</span>
                @endforeach
            </div>
            
            
            <div class="py-5 list-disc">
                {!! str($portfolio->description)->sanitizeHtml() !!}
            </div>
        
        </div>
    </div>
</section>
@endsection