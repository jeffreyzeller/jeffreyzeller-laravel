@extends('layouts.app')
@section('hero')
    <!-- Section Main -->
    @include('home.main')
@endsection
@section('content')
    <!-- Section Services -->
    @include('home.services')
    
    <!-- Section Portfolio -->
    @include('home.portfolio')
    
    <!-- Section About -->
    @include('home.about')
    
    <!-- Layout Background -->
    <div class="snap-start bg-white/80 text-slate-900 dark:bg-slate-950/80 dark:text-white  bg-wave bg-cover bg-no-repeat bg-bottom py-24 px-6 transition-colors duration-300  min-h-[100px]">
    </div>
@endsection