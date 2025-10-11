@extends('layouts.app')

@section('content')
<section id="services" class="snap-start bg-white/80 dark:bg-slate-950/80 text-gray-800 dark:text-gray-200  py-24 px-6 transition-colors duration-300  min-h-[calc(100vh-72px)]">
            
    <div class="lg:flex relative max-w-5xl mx-auto">
        <div class="flex-1">
            <img class="w-full rounded-t-lg sm:rounded" src="{{ asset('storage/' . $portfolio->image) }}">
        </div>
        
        <div class="flex-1 lg:w-1/3 p-5">
            <a href="{{ $portfolio->url }}"><x-heroicon-s-link class="float-right inline w-4 mr-1" /></a>
            <h1 class="text-2xl font-semibold">{{ $portfolio->title }}</h3>
            
            <div class="font-bold rounded-b text-left pt-5">
                @foreach($portfolio->tags as $tag)
                    <span class="inline-block px-2 py-1 mb-1 bg-blue-400 border border-blue-500 dark:bg-slate-700 text-xs text-gray-100 dark:text-slate-300 rounded">{{ $tag }}</span>
                @endforeach
            </div>
            
            <div class="py-5 list-disc">
                {!! str($portfolio->description)->sanitizeHtml() !!}
            </div>
        
        </div>
    </div>

</section>
<div class="w-full text-center content-center bg-white/80 dark:bg-slate-950/80 h-50">
    &nbsp;
</div>
@endsection