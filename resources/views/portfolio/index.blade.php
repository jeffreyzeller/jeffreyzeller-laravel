@extends('layouts.app')

@section('content')
    <!-- Section Portfolio -->
    @include('home.portfolio')
    {{ $portfolio->links() }}
    <!-- Layout Background -->
    <div class="bg-white/80 text-slate-900 dark:bg-slate-950/80 dark:text-white bg-wave-flipped bg-cover bg-no-repeat bg-top py-24 px-6 transition-colors duration-300 h-25 lg:h-75">
    &nbsp;
    </div>
    <div class="w-full text-center content-center bg-white/80 h-50">
    <a class="py-2 px-3 bg-blue-500">Help</a>
    </div>
@endsection