@extends('layouts.app')

@section('content')
    
    <!-- Section Main -->
    @include('home.main')
    
    @include('layouts.nav')
    
    <!-- Section Services -->
    @include('home.services')
    
    <!-- Section Portfolio -->
    @include('home.portfolio')
    
    <!-- Section About -->
    @include('home.about')
    
    <!-- Layout Background -->
    <div class="snap-start bg-white/80 text-slate-900 dark:bg-slate-950/80 dark:text-white  bg-[url({{ asset('images/bg-wave-trans.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans.svg') }})] bg-cover bg-no-repeat bg-bottom py-24 px-6 transition-colors duration-300  min-h-[100px]">
    </div>

    <!-- Portfolio Modals -->
    @include('home.portfolio-modal')
@endsection