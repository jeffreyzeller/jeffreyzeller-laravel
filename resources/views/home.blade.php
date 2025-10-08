@extends('layouts.app')

@section('content')
    
    <!-- Section Main -->
    @include('home.main')

    <!-- Section Services -->
    @include('home.services')
    
    <!-- Section Portfolio -->
    @include('home.portfolio')

    <!-- Section Contact -->
    @include('home.contact')


@endsection