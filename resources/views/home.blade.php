@extends('layouts.app')

@section('content')
    
    <!-- Section Main -->
    @include('home.main')

    <!-- Section Services -->
    @include('home.services')
    
    <!-- Section Portfolio -->
    @include('home.portfolio')
    
    <!-- Section About -->
    @include('home.about')
    <section id="services" class="snap-start bg-white/75 text-slate-900 dark:bg-slate-950 dark:text-white  bg-[url({{ asset('images/bg-wave-trans.svg') }})] dark:bg-[url({{ asset('images/bg-wave-dark-trans.svg') }})] bg-cover bg-no-repeat bg-bottom py-24 px-6 transition-colors duration-300  min-h-[calc(100vh-400px)]">

    </section>

    <!-- Section Contact -->
    @include('home.contact')


@endsection